<?php
require_once('https/HttpCaller.php');
require_once('CreateKMSKeyService.php');
require_once('EncryptService.php');
require_once('EncryptWithDataKeyService.php');
require_once('EncryptWithDataKeyPairService.php');
require_once('DecryptService.php');
require_once('DecryptWithDataKeyService.php');
require_once('DecryptWithDataKeyPairService.php');
require_once('DeleteKMSKeyService.php');
require_once('DisableKMSKeyService.php');
require_once('EnableKMSKeyService.php');
require_once('DeleteAliasKeyService.php');
require_once('UpdateAliasKeyService.php');

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

    public function delete_kms_key($request){
        $delete_kms_key_service = new DeleteKMSKeyService($this->http_caller);
        return $delete_kms_key_service->delete_kms_key($request);
    }

    public function disable_kms_key($request){
        $disable_kms_key_service = new DisableKMSKeyService($this->http_caller);
        return $disable_kms_key_service->disable_kms_key($request);
    }

    public function enable_kms_key($request){
        $enable_kms_key_service = new EnableKMSKeyService($this->http_caller);
        return $enable_kms_key_service->enable_kms_key($request);
    }

    public function delete_alias_key($request){
        $delete_alias_key_service = new DeleteAliasKeyService($this->http_caller);
        return $delete_alias_key_service->delete_alias_key($request);
    }

    public function update_alias_key($request){
        $update_alias_key_service = new UpdateAliasKeyService($this->http_caller);
        return $update_alias_key_service->update_alias_key($request);
    }


}