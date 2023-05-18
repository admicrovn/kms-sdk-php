<?php
class UpdateDescriptionKeyResult{
    public $key_id;
    public $description;

    /**
     * @param $key_id
     * @param $description
     */
    public function __construct($key_id, $description)
    {
        $this->key_id = $key_id;
        $this->description = $description;
    }

    public function __toString()
    {
        return sprintf("key_id = %s, description = %s", $this->key_id, $this->description);
    }

}