<?php
class ListKMSKeyResult{
    public $keys;

    /**
     * @param $keys
     */
    public function __construct($keys)
    {
        $this->keys = $keys;
    }

    public function __toString()
    {
        return sprintf("keys = %s", $this->keys);
    }
}