<?php
class ChangeStateDto
{
    public $keyId;
    public $state;
    public $action;

    /**
     * @param $keyId
     * @param $state
     * @param $action
     */
    public function __construct($keyId, $state, $action)
    {
        $this->keyId = $keyId;
        $this->state = $state;
        $this->action = $action;
    }

}