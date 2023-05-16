<?php

class UpdateDescriptionKeyRequest
{
    public $key_id;
    public $description;

    /**
     * @param $key_id
     * @param $description
     */
    public function __construct($key_id, $description)
    {
        $this->validate($key_id, $description);
        $this->key_id = $key_id;
        $this->description = $description;
    }


    private function validate($key_id, $description)
    {
        if ($key_id == null or $key_id == '') {
            throw new InvalidArgumentException("Required field [key_id]");
        }

        if ($description == null or $description == '') {
            throw new InvalidArgumentException("Required field [description]");
        }
    }
}