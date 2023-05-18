<?php
class GenerateDataKeyDto{
    public $keyId;
    public $algorithm;
    public $encryptPrivateDataKey;
    public $plaintextPrivateDataKey;
    public $plaintextPublicDataKey;
    public $encryptSecretDataKey;
    public $plaintextSecretDataKey;
    public $action;

    /**
     * @param $keyId
     * @param $algorithm
     * @param $encryptPrivateDataKey
     * @param $plaintextPrivateDataKey
     * @param $plaintextPublicDataKey
     * @param $encryptSecretDataKey
     * @param $plaintextSecretDataKey
     * @param $action
     */
    public function __construct($keyId, $algorithm, $encryptPrivateDataKey, $plaintextPrivateDataKey, $plaintextPublicDataKey, $encryptSecretDataKey, $plaintextSecretDataKey, $action)
    {
        $this->keyId = $keyId;
        $this->algorithm = $algorithm;
        $this->encryptPrivateDataKey = $encryptPrivateDataKey;
        $this->plaintextPrivateDataKey = $plaintextPrivateDataKey;
        $this->plaintextPublicDataKey = $plaintextPublicDataKey;
        $this->encryptSecretDataKey = $encryptSecretDataKey;
        $this->plaintextSecretDataKey = $plaintextSecretDataKey;
        $this->action = $action;
    }


}