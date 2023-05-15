<?php
class ChangeStateKMSKeyRepository extends HandlerResponseHttp
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }


    public function change_state_kms_key($change_state_dto)
    {
        $result = $this->http_caller->post(
            Constants::CHANGE_STATE_KEY_API,
            json_encode($change_state_dto),
            ['Content-type: application/json'],
            null,
            10
        );
        $response_body = json_decode($result);
        return $this->handler_response($response_body);
    }

    public function handler_response_success($result)
    {
        return empty($result->data) ? null : $result->data[0];
    }
}