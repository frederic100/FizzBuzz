<?php

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz(): void
    {
        $fizzBuzz = new FizzBuzz();
        $resultat = $fizzBuzz->generateFizzBuzz(1);
        $this->assertEquals("1", $resultat);
    }
}
