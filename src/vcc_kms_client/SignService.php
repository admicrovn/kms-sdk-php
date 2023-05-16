<?php
require('dtos/SignDto.php');
require('SignRepository.php');
require('models/SignResult.php');
class SignService
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function sign($request)
    {
        $sign_dto = new SignDto($request->key_id, $request->message, Action::SIGN, $request->sign_algorithm);
        $sign_repository = new SignRepository($this->http_caller);
        $sign_dto = $sign_repository->sign($sign_dto);
        return new SignResult($sign_dto->keyId, $sign_dto->message, $sign_dto->signAlgorithm);
    }

}