<?php
class VerifyResult{
    public $key_id;
    public $signature_valid;
    public $sign_algorithm;

    /**
     * @param $key_id
     * @param $signature_valid
     * @param $sign_algorithm
     */
    public function __construct($key_id, $signature_valid, $sign_algorithm)
    {
        $this->key_id = $key_id;
        $this->signature_valid = $signature_valid;
        $this->sign_algorithm = $sign_algorithm;
    }

    public function __toString()
    {
        return sprintf("key_id = %s, signature_valid = %s, sign_algorithm = %s", $this->key_id, $this->signature_valid, $this->sign_algorithm);
    }


}