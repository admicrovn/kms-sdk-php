<?php
class GenerateDataKeyPairRequest{
    public $key_id;
    public $algorithm;

    /**
     * @param $key_id
     * @param $algorithm
     */
    public function __construct($key_id, $algorithm)
    {
        $this->validate($key_id, $algorithm);

        $this->key_id = $key_id;
        $this->algorithm = $algorithm;
    }


    private function validate($key_id, $algorithm)
    {
        if ($key_id == null or $key_id == '') {
            throw new InvalidArgumentException("Required field [key_id]");
        }
        if ($algorithm == null or $algorithm == '') {
            throw new InvalidArgumentException("Required field [algorithm]");
        }
    }
}