<?php
require_once('models/UpdateAliasKeyResult.php');
class UpdateAliasKeyService{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function update_alias_key($request){
        $alias_key_dto = new AliasKeyDto($request->key_id, $request->alias, Action::UPDATE_ALIAS);
        $manage_alias_key_repository = new ManageAliasKeyRepository($this->http_caller);
        $alias_key_dto = $manage_alias_key_repository->update_alias($alias_key_dto);
        return new UpdateAliasKeyResult($alias_key_dto->keyId, $alias_key_dto->alias);
    }
}