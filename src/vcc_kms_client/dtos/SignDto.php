<?php
class SignDto{
    public $keyId;
    public $message;
    public $action;
    public $signAlgorithm;

    /**
     * @param $keyId
     * @param $message
     * @param $action
     * @param $signAlgorithm
     */
    public function __construct($keyId, $message, $action, $signAlgorithm)
    {
        $this->keyId = $keyId;
        $this->message = $message;
        $this->action = $action;
        $this->signAlgorithm = $signAlgorithm;
    }


}