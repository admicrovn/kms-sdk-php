<?php

class KMSKeyDto
{
    public $id;
    public $description;
    public $alias;
    public $state;
    public $algorithm;

    /**
     * @param $id
     * @param $description
     * @param $alias
     * @param $state
     * @param $algorithm
     */
    public function __construct($id, $description, $alias, $state, $algorithm)
    {
        $this->id = $id;
        $this->description = $description;
        $this->alias = $alias;
        $this->state = $state;
        $this->algorithm = $algorithm;
    }
}