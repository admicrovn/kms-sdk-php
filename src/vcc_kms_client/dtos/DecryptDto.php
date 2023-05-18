<?php
class DecryptDto{
    public $keyId;
    public $text;
    public $texts;
    public $jsons;
    public $action;
    public $contentType;

    /**
     * @param $keyId
     * @param $text
     * @param $texts
     * @param $jsons
     * @param $action
     * @param $contentType
     */
    public function __construct($keyId, $text, $texts, $jsons, $action, $contentType)
    {
        $this->keyId = $keyId;
        $this->text = $text;
        $this->texts = $texts;
        $this->jsons = $jsons;
        $this->action = $action;
        $this->contentType = $contentType;
    }


}