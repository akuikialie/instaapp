<?php

namespace App\Exceptions;

use Exception;

class FailedException extends Exception
{
    protected $message;
    public function __construct($exception)
    {
        $this->message = $exception->getMessage();
    }

    public function message()
    {
        return $this->message;
    }
}