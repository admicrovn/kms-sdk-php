<?php
require_once 'dtos/KMSKeyDto.php';
require_once 'models/KeyState.php';
require_once 'CreateKMSKeyRepository.php';
require_once 'models/CreateKMSKeyResult.php';
class CreateKMSKeyService
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function create_kms_key($request)
    {
        $kms_key_dto = new KMSKeyDto(null, $request->description, $request->alias, KeyState::ENABLED, $request->algorithm);
        $create_kms_key_repository = new CreateKMSKeyRepository($this->http_caller);
        $kms_key_dto = $create_kms_key_repository->create_kms_key($kms_key_dto);
        return new CreateKMSKeyResult($kms_key_dto->id, $kms_key_dto->alias, $kms_key_dto->algorithm, $kms_key_dto->state, $kms_key_dto->description);
    }


}