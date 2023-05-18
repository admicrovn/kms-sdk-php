<?php
class UpdateAliasKeyResult{
    public $key_id;
    public $alias;

    /**
     * @param $key_id
     * @param $alias
     */
    public function __construct($key_id, $alias)
    {
        $this->key_id = $key_id;
        $this->alias = $alias;
    }

    public function __toString()
    {
        return sprintf("key_id = %s, alias = %s", $this->key_id, $this->alias);
    }

}