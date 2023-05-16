<?php
require_once('dtos/GenerateDataKeyDto.php');
require_once('models/GenerateDataKeyResult.php');
require_once('GenerateDataKeyRepository.php');

class GenerateDataKeyService
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function generate_data_key($request)
    {
        $generate_data_key_dto = new GenerateDataKeyDto($request->key_id, $request->algorithm, null, null, null, null, null, Action::GENERATE_DATA_KEY);
        $generate_data_key_repository = new GenerateDataKeyRepository($this->http_caller);
        $generate_data_key_dto = $generate_data_key_repository->generate_data_key($generate_data_key_dto);
        return new GenerateDataKeyResult($generate_data_key_dto->keyId, $generate_data_key_dto->algorithm, $generate_data_key_dto->plaintextSecretDataKey, $generate_data_key_dto->encryptSecretDataKey);
    }
}