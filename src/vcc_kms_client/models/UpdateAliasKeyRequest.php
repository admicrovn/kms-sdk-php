<?php

class UpdateAliasKeyRequest
{
    public $key_id;
    public $alias;

    /**
     * @param $key_id
     * @param $alias
     */
    public function __construct($key_id, $alias)
    {
        $this->validate($key_id, $alias);
        $this->key_id = $key_id;
        $this->alias = $alias;
    }


    private function validate($key_id, $alias)
    {
        if ($key_id == null or $key_id == '') {
            throw new InvalidArgumentException("Required field [key_id]");
        }

        if ($alias == null or $alias == '') {
            throw new InvalidArgumentException("Required field [alias]");
        }
    }
}