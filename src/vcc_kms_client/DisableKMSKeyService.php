<?php
require_once 'models/DisableKMSKeyResult.php';
require_once 'models/KeyState.php';
require_once 'models/Action.php';
require_once 'dtos/ChangeStateDto.php';
require_once 'ChangeStateKMSKeyRepository.php';
class DisableKMSKeyService{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function disable_kms_key($request){
        $change_state_dto = new ChangeStateDto($request->key_id, KeyState::DISABLED, Action::DISABLE_KEY);
        $change_state_kms_key_repository = new ChangeStateKMSKeyRepository($this->http_caller);
        $change_state_dto = $change_state_kms_key_repository->change_state_kms_key($change_state_dto);
        return new DisableKMSKeyResult($change_state_dto->keyId, $change_state_dto->state);
    }
}