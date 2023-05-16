<?php
class GetKMSKeyRepository extends HandlerResponseHttp{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }


    public function get_by_id($key_id, $action)
    {
        $result = $this->http_caller->get(
            Constants::GET_KEY_BY_ID_API.'/'.$key_id,
            [sprintf("action: %s", $action)],
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