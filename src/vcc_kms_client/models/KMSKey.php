<?php

class KMSKey
{
    public $key_id;
    public $alias;
    public $algorithm;
    public $state;
    public $description;

    /**
     * @param $key_id
     * @param $alias
     * @param $algorithm
     * @param $state
     * @param $description
     */
    public function __construct($key_id, $alias, $algorithm, $state, $description)
    {
        $this->key_id = $key_id;
        $this->alias = $alias;
        $this->algorithm = $algorithm;
        $this->state = $state;
        $this->description = $description;
    }


    public function __toString()
    {
        return sprintf("key_id = %s, alias = %s, algorithm = %s, state = %s, description = %s", $this->key_id, $this->alias, $this->algorithm, $this->state, $this->description);
    }


}