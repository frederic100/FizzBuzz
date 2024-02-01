<?php

namespace FizzBuzz\Tests\Exceptions;

use FizzBuzz\Exceptions\NegativeNotAllowedException;
use PHPUnit\Framework\TestCase;

class NegativeNotAllowedTest extends TestCase
{
    public function testWriteLog(): void
    {
        new NegativeNotAllowedException(-1);
        $content = file_get_contents(__DIR__ . "/../../log/Exceptions.log");
        $this->assertEquals("'-1' seul un nombre strictement positif est autorisé", $content);
    }
}
