<?php
class GenerateDataKeyPairResult{
    public $key_id;
    public $algorithm;
    public $encrypt_private_data_key;
    public $plaintext_private_data_key;
    public $plaintext_public_data_key;

    /**
     * @param $key_id
     * @param $algorithm
     * @param $encrypt_private_data_key
     * @param $plaintext_private_data_key
     * @param $plaintext_public_data_key
     */
    public function __construct($key_id, $algorithm, $encrypt_private_data_key, $plaintext_private_data_key, $plaintext_public_data_key)
    {
        $this->key_id = $key_id;
        $this->algorithm = $algorithm;
        $this->encrypt_private_data_key = $encrypt_private_data_key;
        $this->plaintext_private_data_key = $plaintext_private_data_key;
        $this->plaintext_public_data_key = $plaintext_public_data_key;
    }


    public function __toString()
    {
        return sprintf("key_id = %s, algorithm = %s, encrypt_private_data_key = %s, plaintext_private_data_key = %s, plaintext_public_data_key = %s", $this->key_id, $this->algorithm, $this->encrypt_private_data_key, $this->plaintext_private_data_key, $this->plaintext_public_data_key);
    }

}