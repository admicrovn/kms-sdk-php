<?php
class DecryptResult{
    public $key_id;
    public $output;

    /**
     * @param $key_id
     * @param $output
     */
    public function __construct($key_id, $output)
    {
        $this->key_id = $key_id;
        $this->output = $output;
    }

    public function __toString()
    {
        return sprintf("key_id = %s, output = %s", $this->key_id, $this->output);
    }

}