<?php
require_once 'dtos/AliasKeyDto.php';
require_once 'ManageAliasKeyRepository.php';
require_once 'models/DeleteAliasKeyResult.php';
require_once 'models/Action.php';
class DeleteAliasKeyService{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function delete_alias_key($request){
        $alias_key_dto = new AliasKeyDto($request->key_id, null, Action::DELETE_ALIAS);
        $manage_alias_key_repository = new ManageAliasKeyRepository($this->http_caller);
        $alias_key_dto = $manage_alias_key_repository->delete_alias($alias_key_dto);
        return new DeleteAliasKeyResult($alias_key_dto->keyId);
    }
}