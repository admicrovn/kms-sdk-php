<?php
class DeleteAliasKeyResult{
    public $key_id;

    /**
     * @param $key_id
     */
    public function __construct($key_id)
    {
        $this->key_id = $key_id;
    }


    public function __toString()
    {
        return sprintf("key_id = %s", $this->key_id);
    }

}