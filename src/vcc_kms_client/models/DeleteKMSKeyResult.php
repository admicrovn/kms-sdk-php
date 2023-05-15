<?php
class DeleteKMSKeyResult{
    public $key_id;
    public $state;

    /**
     * @param $key_id
     * @param $state
     */
    public function __construct($key_id, $state)
    {
        $this->key_id = $key_id;
        $this->state = $state;
    }

    public function __toString()
    {
        return sprintf("key_id = %s, state = %s", $this->key_id, $this->state);
    }

}