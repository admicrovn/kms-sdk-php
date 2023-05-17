<?php
require_once 'models/Code.php';
require_once 'exceptions/InternalServerException.php';
require_once 'exceptions/InvalidDataException.php';
require_once 'exceptions/InvalidRequestException.php';
require_once 'exceptions/NotFoundException.php';
require_once 'exceptions/UnauthorizedException.php';
abstract class HandlerResponseHttp
{
    public function handler_response($response_body)
    {
        switch ($response_body->code) {
            case Code::UNAUTHORIZED_REQUEST:
                throw new UnauthorizedException($response_body->message);
            case Code::BAD_REQUEST:
                throw new InvalidRequestException($response_body->message);
            case Code::DATA_ERROR:
                throw new InvalidDataException($response_body->message);
            case Code::INTERNAL_ERROR:
                throw new InternalServerException($response_body->message);
            case Code::NOT_FOUND:
                throw new NotFoundException($response_body->message);
            case Code::SUCCESS:
                return $this->handler_response_success($response_body->result);
            default:
                throw new Exception($response_body->message);
        }
    }

    abstract public function handler_response_success($result);
}