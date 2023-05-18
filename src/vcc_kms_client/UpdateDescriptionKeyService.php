<?php
require_once 'models/UpdateDescriptionKeyResult.php';
require_once 'UpdateDescriptionKeyRepository.php';
require_once 'dtos/DescriptionKeyDto.php';
require_once 'models/Action.php';
class UpdateDescriptionKeyService{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function update_description_key($request){
        $description_key_dto = new DescriptionKeyDto($request->key_id, $request->description, Action::UPDATE_DESCRIPTION_KEY);
        $update_description_key_repository = new UpdateDescriptionKeyRepository($this->http_caller);
        $description_key_dto = $update_description_key_repository->update_description($description_key_dto);
        return new UpdateDescriptionKeyResult($description_key_dto->keyId, $description_key_dto->description);
    }
}