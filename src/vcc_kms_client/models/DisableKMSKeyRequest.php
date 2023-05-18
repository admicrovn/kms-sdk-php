<?php
class DisableKMSKeyRequest{
    public $key_id;

    /**
     * @param $key_id
     */
    public function __construct($key_id)
    {
        $this->validate($key_id);

        $this->key_id = $key_id;
    }


    private function validate($key_id)
    {
        if ($key_id == null or $key_id == '') {
            throw new InvalidArgumentException("Required field [key_id]");
        }
    }
}