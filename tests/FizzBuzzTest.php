<?php

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public FizzBuzz $fizzBuzz;
    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }
    public function testFizzBuzz(): void
    {
        $resultat = $this->fizzBuzz->generateFizzBuzz(1);
        $this->assertEquals("1", $resultat);
    }
    public function testFizzBuzz2(): void
    {
        $resultat = $this->fizzBuzz->generateFizzBuzz(2);
        $this->assertEquals("1, 2", $resultat);
    }
    public function testFizzBuzz3(): void
    {
        $resultat = $this->fizzBuzz->generateFizzBuzz(3);
        $this->assertEquals("1, 2, Fizz", $resultat);
    }
    public function testFizzBuzz4(): void
    {
        $resultat = $this->fizzBuzz->generateFizzBuzz(4);
        $this->assertEquals("1, 2, Fizz, 4", $resultat);
    }
    public function testFizzBuzz5(): void
    {
        $resultat = $this->fizzBuzz->generateFizzBuzz(5);
        $this->assertEquals("1, 2, Fizz, 4, Buzz", $resultat);
    }
    public function testFizzBuzz8(): void
    {
        $resultat = $this->fizzBuzz->generateFizzBuzz(8);
        $this->assertEquals("1, 2, Fizz, 4, Buzz, Fizz, 7, 8", $resultat);
    }
    public function testFizzBuzz15(): void
    {
        $resultat = $this->fizzBuzz->generateFizzBuzz(15);
        $this->assertEquals("1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz", $resultat);
    }
    public function testFizzBuzz30(): void
    {
        $resultat = $this->fizzBuzz->generateFizzBuzz(30);
        $this->assertEquals("1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, 17, Fizz, " .
            "19, Buzz, Fizz, 22, 23, Fizz, Buzz, 26, Fizz, 28, 29, FizzBuzz", $resultat);
    }
}
