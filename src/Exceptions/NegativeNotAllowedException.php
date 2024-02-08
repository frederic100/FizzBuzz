<?php

namespace FizzBuzz\Exceptions;

use Exception;

use function Safe\file_put_contents;

class NegativeNotAllowedException extends Exception
{
    public const MESSAGE_ERREUR = "'%d' seul un nombre strictement positif est autorisé";
    public const EOL = "\n";

    public function __construct(int $badnumber)
    {
        $message = sprintf(self::MESSAGE_ERREUR, $badnumber);
        parent::__construct($message);
        $fileName = __DIR__ . "/../../log/Exceptions.log";
        file_put_contents($fileName, $message . self::EOL, FILE_APPEND);
    }
}
