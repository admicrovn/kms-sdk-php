<?php
require_once('https/HttpCaller.php');
require_once('CreateKMSKeyService.php');
require_once('EncryptService.php');
require_once('EncryptWithDataKeyService.php');
require_once('EncryptWithDataKeyPairService.php');
require_once('DecryptService.php');
require_once('DecryptWithDataKeyService.php');
require_once('DecryptWithDataKeyPairService.php');

class KMSClient
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($credentals)
    {
        $this->http_caller = new HttpCaller($credentals);
    }


    public function create_key($request)
    {
        $create_kms_key_service = new CreateKMSKeyService($this->http_caller);
        return $create_kms_key_service->create_kms_key($request);
    }

    public function encrypt($request)
    {
        $encrypt_service = new EncryptService($this->http_caller);
        return $encrypt_service->encrypt($request);
    }

    public function encrypt_with_data_key($request)
    {
        $encrypt_with_data_key_service = new EncryptWithDataKeyService($this->http_caller);
        return $encrypt_with_data_key_service->encrypt_with_data_key($request);
    }

    public function encrypt_with_data_key_pair($request)
    {
        $encrypt_with_data_key_pair_service = new EncryptWithDataKeyPairService($this->http_caller);
        return $encrypt_with_data_key_pair_service->encrypt_with_data_key_pair($request);
    }

    public function decrypt($request)
    {
        $decrypt_service = new DecryptService($this->http_caller);
        return $decrypt_service->decrypt($request);
    }

    public function decrypt_with_data_key($request)
    {
        $decrypt_with_data_key_service = new DecryptWithDataKeyService($this->http_caller);
        return $decrypt_with_data_key_service->decrypt_with_data_key($request);
    }

    public function decrypt_with_data_key_pair($request)
    {
        $decrypt_with_data_key_pair_service = new DecryptWithDataKeyPairService($this->http_caller);
        return $decrypt_with_data_key_pair_service->decrypt_with_data_key_pair($request);
    }
}