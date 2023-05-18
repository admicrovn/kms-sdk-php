<?php
class ListKMSKeyByAliasRequest{
    public $limit;
    public $offset;
    public $alias;

    /**
     * @param $limit
     * @param $offset
     * @param $alias
     */
    public function __construct($limit, $offset, $alias)
    {
        $this->validate($alias);

        $this->limit = $limit;
        $this->offset = $offset;
        $this->alias = $alias;
    }

    private function validate($alias)
    {
        if ($alias == null or $alias == '') {
            throw new InvalidArgumentException("Required field [alias]");
        }
    }


}