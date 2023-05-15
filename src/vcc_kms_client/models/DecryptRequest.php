<?php
class DecryptRequest{
    public $key_id;
    public $input;
    public $content_type;

    /**
     * @param $key_id
     * @param $input
     * @param $content_type
     */
    public function __construct($key_id, $input, $content_type)
    {
        $this->validate($key_id, $input, $content_type);

        $this->key_id = $key_id;
        $this->input = $input;
        $this->content_type = $content_type;
    }


    private function validate($key_id, $input, $content_type)
    {
        if ($key_id == null or $key_id == '') {
            throw new InvalidArgumentException("Required field [key_id]");
        }
        if ($input == null or $input == '') {
            throw new InvalidArgumentException("Required field [input]");
        }
        if ($content_type == null or $content_type == '') {
            throw new InvalidArgumentException("Required field [content_type]");
        }
    }

}