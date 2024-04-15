<?php

class KMSCredentials
{
    private $cer_file_path;
    private $key_file_path;
    private $ca_file_path;
    private $domain;



    public function __construct($path)
    {
        $security_file = file_get_contents($path . DIRECTORY_SEPARATOR . 'security_file.json');

        $keystore_base64 = json_decode($security_file)->keystore_base64;
        $truststore_base64 = json_decode($security_file)->truststore_base64;

        $truststore_string = base64_decode($truststore_base64);
        $keystore_string = base64_decode($keystore_base64);

        $keystore_p12 = array();
        openssl_pkcs12_read($keystore_string, $keystore_p12, json_decode($security_file)->password_file);

        $truststore_p12 = array();
        openssl_pkcs12_read($truststore_string, $truststore_p12, json_decode($security_file)->password_file);

        $cer_file_path = $path . DIRECTORY_SEPARATOR . 'cer.pem';
        $ca_file_path = $path . DIRECTORY_SEPARATOR . 'ca.pem';
        $key_file_path = $path . DIRECTORY_SEPARATOR . 'key.pem';

//        if (!is_file($key_file_path)) {
//            openssl_pkey_export_to_file($keystore_p12['pkey'], $key_file_path);
//        }
//
//        if (!is_file($cer_file_path)) {
//            openssl_x509_export_to_file($keystore_p12['cert'], $cer_file_path);
//        }
//
//        if (!is_file($ca_file_path)) {
//            openssl_x509_export_to_file($truststore_p12['extracerts'][0], $ca_file_path);
//        }

        $this->ca_file_path = $ca_file_path;
        $this->cer_file_path = $cer_file_path;
        $this->key_file_path = $key_file_path;
        $this->domain = json_decode($security_file)->domain;

    }


    public function get_cert_file_path()
    {
        return $this->cer_file_path;
    }

    public function get_key_file_path()
    {
        return $this->key_file_path;
    }

    public function get_ca_file_path()
    {
        return $this->ca_file_path;
    }

    public function get_domain()
    {
        return $this->domain;
    }


}