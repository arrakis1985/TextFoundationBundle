<?php

namespace Nowfel\TextFoundationBundle\Exceptions;

class NumericValueToTextException extends \LogicException
{
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}