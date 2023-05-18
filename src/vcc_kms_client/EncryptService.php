<?php
require_once 'dtos/EncryptDto.php';
require_once 'models/ContentType.php';
require_once 'models/Action.php';
require_once 'EncryptRepository.php';
require_once 'models/EncryptResult.php';
class EncryptService{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function encrypt($request){
        $encrypt_dto = new EncryptDto(
            $request->key_id,
            $request->content_type == ContentType::SINGLE_STRING ? $request->input : null,
            $request->content_type == ContentType::LIST_STRING ? $request->input : null,
            $request->content_type == ContentType::LIST_JSON_OBJECT ? $request->input : null,
            null,
            Action::ENCRYPT,
            $request->content_type
        );

        $encrypt_repository = new EncryptRepository($this->http_caller);
        $encrypt_dto = $encrypt_repository->encrypt($encrypt_dto);

        $output = null;
        if($request->content_type == ContentType::SINGLE_STRING){
            $output = $encrypt_dto->text;
        }
        if($request->content_type == ContentType::LIST_STRING){
            $output = $encrypt_dto->texts;
        }
        if($request->content_type == ContentType::LIST_JSON_OBJECT){
            $output = $encrypt_dto->jsons;
        }

        return new EncryptResult($encrypt_dto->keyId, $output, $encrypt_dto->algorithm);
    }

}