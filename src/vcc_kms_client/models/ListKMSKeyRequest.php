<?php
class ListKMSKeyRequest{
    public $limit;
    public $offset;

    /**
     * @param $limit
     * @param $offset
     */
    public function __construct($limit, $offset)
    {
        $this->limit = $limit;
        $this->offset = $offset;
    }
}