<?php
class SignRequest
{
    public $key_id;
    public $message;
    public $sign_algorithm;

    /**
     * @param $key_id
     * @param $message
     * @param $sign_algorithm
     */
    public function __construct($key_id, $message, $sign_algorithm)
    {
        $this->validate($key_id, $message, $sign_algorithm);

        $this->key_id = $key_id;
        $this->message = $message;
        $this->sign_algorithm = $sign_algorithm;
    }

    private function validate($key_id, $message, $sign_algorithm)
    {
        if ($key_id == null or $key_id == '') {
            throw new InvalidArgumentException("Required field [key_id]");
        }

        if ($message == null or $message == '') {
            throw new InvalidArgumentException("Required field [message]");
        }

        if ($sign_algorithm == null or $sign_algorithm == '') {
            throw new InvalidArgumentException("Required field [sign_algorithm]");
        }
    }


}