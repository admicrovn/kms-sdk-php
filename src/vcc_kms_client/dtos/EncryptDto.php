<?php
class EncryptDto{
    public $keyId;
    public $text;
    public $texts;
    public $jsons;
    public $algorithm;
    public $action;
    public $contentType;

    /**
     * @param $keyId
     * @param $text
     * @param $texts
     * @param $jsons
     * @param $algorithm
     * @param $action
     * @param $contentType
     */
    public function __construct($keyId, $text, $texts, $jsons, $algorithm, $action, $contentType)
    {
        $this->keyId = $keyId;
        $this->text = $text;
        $this->texts = $texts;
        $this->jsons = $jsons;
        $this->algorithm = $algorithm;
        $this->action = $action;
        $this->contentType = $contentType;
    }


}