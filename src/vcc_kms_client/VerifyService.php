<?php
require('dtos/VerifyDto.php');
require('VerifyRepository.php');
require('models/VerifyResult.php');
class VerifyService
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }

    public function verify($request)
    {
        $verify_dto = new VerifyDto($request->key_id, $request->message, $request->signature, Action::VERIFY, $request->sign_algorithm, null);
        $verify_repository = new VerifyRepository($this->http_caller);
        $verify_dto = $verify_repository->verify($verify_dto);
        return new VerifyResult($verify_dto->keyId, $verify_dto->signatureValid, $verify_dto->signAlgorithm);
    }

}