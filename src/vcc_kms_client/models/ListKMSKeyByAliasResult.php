<?php
class ListKMSKeyByAliasResult{
    public $keys;
    public $alias;

    /**
     * @param $keys
     * @param $alias
     */
    public function __construct($keys, $alias)
    {
        $this->keys = $keys;
        $this->alias = $alias;
    }

    public function __toString()
    {
        return sprintf("keys = %s, alias = %s", $this->keys, $this->alias);
    }
}