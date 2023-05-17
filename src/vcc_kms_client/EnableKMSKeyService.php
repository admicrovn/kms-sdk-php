<?php
require_once 'models/EnableKMSKeyResult.php';
require_once 'models/KeyState.php';
require_once 'models/Action.php';
require_once 'dtos/ChangeStateDto.php';
require_once 'ChangeStateKMSKeyRepository.php';
class EnableKMSKeyService{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function enable_kms_key($request){
        $change_state_dto = new ChangeStateDto($request->key_id, KeyState::ENABLED, Action::ENABLE_KEY);
        $change_state_kms_key_repository = new ChangeStateKMSKeyRepository($this->http_caller);
        $change_state_dto = $change_state_kms_key_repository->change_state_kms_key($change_state_dto);
        return new EnableKMSKeyResult($change_state_dto->keyId, $change_state_dto->state);
    }
}