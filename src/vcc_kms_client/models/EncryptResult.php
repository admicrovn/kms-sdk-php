<?php
class EncryptResult{
    public $key_id;
    public $output;
    public $algorithm;

    /**
     * @param $key_id
     * @param $output
     * @param $algorithm
     */
    public function __construct($key_id, $output, $algorithm)
    {
        $this->key_id = $key_id;
        $this->output = $output;
        $this->algorithm = $algorithm;
    }

    public function __toString()
    {
        return sprintf("key_id = %s, output = %s, algorithm = %s", $this->key_id, $this->output, $this->algorithm);
    }

}