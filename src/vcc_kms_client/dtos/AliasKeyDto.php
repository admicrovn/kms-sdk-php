<?php
class AliasKeyDto
{
    public $keyId;
    public $alias;
    public $action;

    /**
     * @param $keyId
     * @param $alias
     * @param $action
     */
    public function __construct($keyId, $alias, $action)
    {
        $this->keyId = $keyId;
        $this->alias = $alias;
        $this->action = $action;
    }


}