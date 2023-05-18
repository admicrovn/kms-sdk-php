<?php

class CreateKMSKeyRequest
{
    public $description;
    public $alias;
    public $algorithm;

    /**
     * @param $description
     * @param $alias
     * @param $algorithm
     */
    public function __construct($description, $alias, $algorithm)
    {
        $this->validate($algorithm);

        $this->description = $description;
        $this->alias = $alias;
        $this->algorithm = $algorithm;
    }

    private function validate($algorithm)
    {
        if ($algorithm == null or $algorithm == '') {
            throw new InvalidArgumentException("Required field [algorithm]");
        }
    }
}