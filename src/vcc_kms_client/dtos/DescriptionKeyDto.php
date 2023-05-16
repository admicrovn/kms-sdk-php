<?php
class DescriptionKeyDto{
    public $keyId;
    public $description;
    public $action;

    /**
     * @param $keyId
     * @param $description
     * @param $action
     */
    public function __construct($keyId, $description, $action)
    {
        $this->keyId = $keyId;
        $this->description = $description;
        $this->action = $action;
    }


}