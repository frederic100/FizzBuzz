<?php

namespace FizzBuzz\Tests\Exceptions;

use FizzBuzz\Exceptions\NegativeNotAllowedException;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\LinesOfCode\NegativeValueException;

class NegativeNotAllowedTest extends TestCase
{
    protected function setUp(): void
    {
        unlink(__DIR__ . '/../../log/Exceptions.log');
    }

    public function testWriteLog(): void
    {
        new NegativeNotAllowedException(-1);
        $content = file_get_contents(__DIR__ . "/../../log/Exceptions.log");
        $this->assertEquals("'-1' seul un nombre strictement positif est autorisé" .
            NegativeNotAllowedException::EOL, $content);
    }

    public function testWriteLog2(): void
    {
        new NegativeNotAllowedException(0);
        $content = file_get_contents(__DIR__ . "/../../log/Exceptions.log");
        $this->assertEquals("'0' seul un nombre strictement positif est autorisé" .
            NegativeNotAllowedException::EOL, $content);
    }

    public function testWriteLogDeuxErreurs(): void
    {
        new NegativeNotAllowedException(0);
        new NegativeNotAllowedException(-1);
        $content = file_get_contents(__DIR__ . "/../../log/Exceptions.log");
        $this->assertEquals("'0' seul un nombre strictement positif est autorisé" .
            NegativeNotAllowedException::EOL . "'-1' seul un nombre strictement positif est autorisé" .
            NegativeNotAllowedException::EOL, $content);
    }
}
