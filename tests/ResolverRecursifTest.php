<?php

namespace FizzBuzz\Tests;

use FizzBuzz\Exceptions\NegativeNotAllowedException;
use FizzBuzz\Exceptions\ZeroNotAllowedException;
use FizzBuzz\FizzBuzz;
use FizzBuzz\ResolverRecursif;
use PHPUnit\Framework\TestCase;

class ResolverRecursifTest extends TestCase
{
    public FizzBuzz $fizzBuzz;

    public function testFizzBuzz(): void
    {
        $recursif = new ResolverRecursif(1);
        $resultat = (new FizzBuzz(1, $recursif))->generateFizzBuzz();
        $this->assertEquals("1", $resultat);
    }
    public function testFizzBuzz2(): void
    {
        $resultat = (new FizzBuzz(2))->generateFizzBuzz();
        $this->assertEquals("1, 2", $resultat);
    }
    public function testFizzBuzz3(): void
    {
        $resultat = (new FizzBuzz(3))->generateFizzBuzz();
        $this->assertEquals("1, 2, Fizz", $resultat);
    }
    public function testFizzBuzz4(): void
    {
        $resultat = (new FizzBuzz(4))->generateFizzBuzz();
        $this->assertEquals("1, 2, Fizz, 4", $resultat);
    }
    public function testFizzBuzz5(): void
    {
        $resultat = (new FizzBuzz(5))->generateFizzBuzz();
        $this->assertEquals("1, 2, Fizz, 4, Buzz", $resultat);
    }
    public function testFizzBuzz8(): void
    {
        $resultat = (new FizzBuzz(8))->generateFizzBuzz();
        $this->assertEquals("1, 2, Fizz, 4, Buzz, Fizz, 7, 8", $resultat);
    }
    public function testFizzBuzz15(): void
    {
        $resultat = (new FizzBuzz(15))->generateFizzBuzz();
        $this->assertEquals("1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz", $resultat);
    }
    public function testFizzBuzz30(): void
    {
        $resultat = (new FizzBuzz(30))->generateFizzBuzz();
        $this->assertEquals("1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, 16, 17, Fizz, " .
            "19, Buzz, Fizz, 22, 23, Fizz, Buzz, 26, Fizz, 28, 29, FizzBuzz", $resultat);
    }
    public function testFizzBuzzNegatif(): void
    {
        $this->expectException(NegativeNotAllowedException::class);
        $this->expectExceptionMessage("'-2' seul un nombre strictement positif est autorisé");
        (new FizzBuzz(-2))->generateFizzBuzz();
    }
    public function testFizzBuzzNullException(): void
    {
        $this->expectException(ZeroNotAllowedException::class);
        $this->expectExceptionMessage("0 est un chiffre null");
        (new FizzBuzz(0))->generateFizzBuzz();
    }
}
