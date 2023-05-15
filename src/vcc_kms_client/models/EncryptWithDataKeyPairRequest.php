<?php
class EncryptWithDataKeyPairRequest{
    public $key_id;
    public $input;
    public $algorithm;
    public $content_type;

    /**
     * @param $key_id
     * @param $input
     * @param $content_type
     */
    public function __construct($key_id, $input, $algorithm, $content_type)
    {
        $this->validate($key_id, $input, $content_type, $algorithm);

        $this->key_id = $key_id;
        $this->input = $input;
        $this->content_type = $content_type;
        $this->algorithm = $algorithm;
    }


    private function validate($key_id, $input, $content_type, $algorithm)
    {
        if ($key_id == null or $key_id == '') {
            throw new InvalidArgumentException("Required field [key_id]");
        }
        if ($input == null or $input == '') {
            throw new InvalidArgumentException("Required field [input]");
        }
        if ($content_type == null or $content_type == '') {
            throw new InvalidArgumentException("Required field [content_type]");
        }
        if ($algorithm == null or $algorithm == '') {
            throw new InvalidArgumentException("Required field [algorithm]");
        }
    }

}