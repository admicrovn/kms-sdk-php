<?php
class VerifyDto{
    public $keyId;
    public $message;
    public $signedMessage;
    public $action;
    public $signAlgorithm;
    public $signatureValid;

    /**
     * @param $keyId
     * @param $message
     * @param $signedMessage
     * @param $action
     * @param $signAlgorithm
     * @param $signatureValid
     */
    public function __construct($keyId, $message, $signedMessage, $action, $signAlgorithm, $signatureValid)
    {
        $this->keyId = $keyId;
        $this->message = $message;
        $this->signedMessage = $signedMessage;
        $this->action = $action;
        $this->signAlgorithm = $signAlgorithm;
        $this->signatureValid = $signatureValid;
    }


}