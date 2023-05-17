<?php
require_once 'HandlerResponseHttp.php';
require_once 'constants/Constants.php';
class ManageAliasKeyRepository extends HandlerResponseHttp
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }


    public function update_alias($alias_key_dto)
    {
        $result = $this->http_caller->post(
            Constants::UPDATE_ALIAS_API,
            json_encode($alias_key_dto),
            ['Content-type: application/json'],
            null,
            10
        );
        $response_body = json_decode($result);
        return $this->handler_response($response_body);
    }

    public function delete_alias($alias_key_dto)
    {
        $result = $this->http_caller->post(
            Constants::DELETE_ALIAS_API,
            json_encode($alias_key_dto),
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