<?php
require_once 'ListKMSKeyRepository.php';
require_once 'models/ListKMSKeyByAliasResult.php';
require_once 'models/KMSKey.php';
class ListKMSKeyByAliasService
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function list_kms_key_by_alias($request)
    {
        $list_kms_key_repository = new ListKMSKeyRepository($this->http_caller);
        $kms_key_dtos = $list_kms_key_repository->get_by_alias($request->alias,$request->limit, $request->offset);
        $keys = array();
        foreach ($kms_key_dtos as $kms_key_dto){
            $keys[] = new KMSKey($kms_key_dto->id, $kms_key_dto->alias, $kms_key_dto->algorithm, $kms_key_dto->state, $kms_key_dto->description);
        }

        return new ListKMSKeyByAliasResult($keys, $request->alias);
    }


}