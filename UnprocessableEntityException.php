<?php

namespace App\Services\Rest\Exceptions;

use App\Exceptions\AresException;

class UnprocessableEntityException extends AresException
{
    protected $message = "Unprocessable Entity sent, semantics or command not valid";


    public function __construct($response = null, $message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
    }
}
