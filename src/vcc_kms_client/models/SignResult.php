<?php
class SignResult{
    public $key_id;
    public $signature;
    public $sign_algorithm;

    /**
     * @param $key_id
     * @param $signature
     * @param $sign_algorithm
     */
    public function __construct($key_id, $signature, $sign_algorithm)
    {
        $this->key_id = $key_id;
        $this->signature = $signature;
        $this->sign_algorithm = $sign_algorithm;
    }

    public function __toString()
    {
        return sprintf("key_id = %s, signature = %s, sign_algorithm = %s", $this->key_id, $this->signature, $this->sign_algorithm);
    }


}