<?php
require_once 'HandlerResponseHttp.php';
require_once 'constants/Constants.php';
class ListKMSKeyRepository extends HandlerResponseHttp
{
    private $http_caller;

    /**
     * @param $http_caller
     */
    public function __construct($http_caller)
    {
        $this->http_caller = $http_caller;
    }


    public function list_key($limit, $offset)
    {
        $params = array();
        if ($limit != null) {
            $params['limit'] = $limit;
        }
        if ($offset != null) {
            $params['offset'] = $offset;
        }
        $result = $this->http_caller->get(
            Constants::LIST_KEY_API,
            null,
            $params,
            10
        );
        $response_body = json_decode($result);
        return $this->handler_response($response_body);
    }

    public function get_by_alias($alias, $limit, $offset)
    {
        $alias = str_replace(' ', '%20',$alias);

        $params = array();
        if ($limit != null) {
            $params['limit'] = $limit;
        }
        if ($offset != null) {
            $params['offset'] = $offset;
        }
        $result = $this->http_caller->get(
            Constants::GET_KEY_BY_ALIAS_API.'/'.$alias,
            null,
            $params,
            10
        );
        $response_body = json_decode($result);
        return $this->handler_response($response_body);
    }

    public function handler_response_success($result)
    {
        return $result->data;
    }
}