<?php
require_once 'dtos/DecryptDto.php';
require_once 'models/ContentType.php';
require_once 'models/Action.php';
require_once 'DecryptRepository.php';
require_once 'models/DecryptWithDataKeyResult.php';
class DecryptWithDataKeyService{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function decrypt_with_data_key($request){
        $decrypt_dto = new DecryptDto(
            $request->key_id,
            $request->content_type == ContentType::SINGLE_STRING ? $request->input : null,
            $request->content_type == ContentType::LIST_STRING ? $request->input : null,
            $request->content_type == ContentType::LIST_JSON_OBJECT ? $request->input : null,
            Action::DECRYPT_WITH_DATA_KEY,
            $request->content_type
        );

        $decrypt_repository = new DecryptRepository($this->http_caller);
        $decrypt_dto = $decrypt_repository->decrypt_with_data_key($decrypt_dto);

        $output = null;
        if($request->content_type == ContentType::SINGLE_STRING){
            $output = $decrypt_dto->text;
        }
        if($request->content_type == ContentType::LIST_STRING){
            $output = $decrypt_dto->texts;
        }
        if($request->content_type == ContentType::LIST_JSON_OBJECT){
            $output = $decrypt_dto->jsons;
        }

        return new DecryptWithDataKeyResult($decrypt_dto->keyId, $output);
    }

}