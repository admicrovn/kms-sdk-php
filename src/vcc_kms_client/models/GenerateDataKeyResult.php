<?php
class GenerateDataKeyResult{
    public $key_id;
    public $algorithm;
    public $plaintext_data_key;
    public $encrypt_data_key;

    /**
     * @param $key_id
     * @param $algorithm
     * @param $plaintext_data_key
     * @param $encrypt_data_key
     */
    public function __construct($key_id, $algorithm, $plaintext_data_key, $encrypt_data_key)
    {
        $this->key_id = $key_id;
        $this->algorithm = $algorithm;
        $this->plaintext_data_key = $plaintext_data_key;
        $this->encrypt_data_key = $encrypt_data_key;
    }

    public function __toString()
    {
        return sprintf("key_id = %s, algorithm = %s, plaintext_data_key = %s, encrypt_data_key = %s", $this->key_id, $this->algorithm, $this->plaintext_data_key, $this->encrypt_data_key);
    }

}