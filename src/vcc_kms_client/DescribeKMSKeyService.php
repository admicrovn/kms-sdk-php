<?php
require_once 'GetKMSKeyRepository.php';
require_once 'models/DescribeKMSKeyResult.php';
require_once 'models/Action.php';
class DescribeKMSKeyService
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function describe_kms_key($request)
    {
        $get_kms_key_repository = new GetKMSKeyRepository($this->http_caller);
        $kms_key_dto = $get_kms_key_repository->get_by_id($request->key_id, Action::DESCRIBE_KEY);
        return new DescribeKMSKeyResult($kms_key_dto->id, $kms_key_dto->alias, $kms_key_dto->algorithm, $kms_key_dto->state, $kms_key_dto->description);
    }


}