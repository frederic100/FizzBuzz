<?php

namespace FizzBuzz\Exceptions;

class ZeroNotAllowedException extends LogedException
{
    public const MESSAGE_ERREUR = "0 est un chiffre null";
    public const EOL = "\n";

    public function __construct()
    {
        $message = sprintf(self::MESSAGE_ERREUR);
        parent::__construct($message);
    }
}
