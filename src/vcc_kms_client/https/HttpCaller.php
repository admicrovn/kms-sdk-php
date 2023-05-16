<?php

class HttpCaller
{
    private $kms_credentials;

    /**
     * @param $kms_credentials
     */
    public function __construct($kms_credentials)
    {
        $this->kms_credentials = $kms_credentials;
    }

    public function get($api, $headers, $params, $timeout)
    {
        $url = $this->kms_credentials->get_domain().$api;

        $curl = curl_init();

        if ($params != null) {
            $url = sprintf("%s?%s", $url, http_build_query($params));
        }

        if ($headers != null) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSLCERT, $this->kms_credentials->get_cert_file_path());
        curl_setopt($curl, CURLOPT_SSLKEY, $this->kms_credentials->get_key_file_path());
        curl_setopt($curl, CURLOPT_CAINFO, $this->kms_credentials->get_ca_file_path());
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);

        $resp = curl_exec($curl);
        $this->deleteFiles();
        curl_close($curl);
        return $resp;
    }

    public function post($api, $body, $headers, $params, $timeout)
    {
        $url = $this->kms_credentials->get_domain().$api;

        $curl = curl_init();

        if ($params != null) {
            $url = sprintf("%s?%s", $url, http_build_query($params));
        }

        if ($headers != null) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        }

        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($curl, CURLOPT_SSLCERT, $this->kms_credentials->get_cert_file_path());
        curl_setopt($curl, CURLOPT_SSLKEY, $this->kms_credentials->get_key_file_path());
        curl_setopt($curl, CURLOPT_CAINFO, $this->kms_credentials->get_ca_file_path());
        curl_setopt($curl, CURLOPT_VERBOSE, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);

        $resp = curl_exec($curl);
        $this->deleteFiles();
        curl_close($curl);
        return $resp;
    }

    function deleteFiles()
    {
        if(is_file('key.pem')) {
            unlink('key.pem');
        }
        if(is_file('ca.pem')) {
            unlink('ca.pem');
        }
        if(is_file('cer.pem')) {
            unlink('cer.pem');
        }

    }

}