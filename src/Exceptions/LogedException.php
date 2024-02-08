<?php

namespace FizzBuzz\Exceptions;

use Exception;

class LogedException extends Exception
{
    public const EOL = "\n";

    public function __construct(string $message)
    {
        parent::__construct($message);
        $fileName = __DIR__ . "/../../log/Exceptions.log";
        file_put_contents($fileName, $message . self::EOL, FILE_APPEND);
    }
}
