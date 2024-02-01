<?php

namespace FizzBuzz;

use FizzBuzz\Exceptions\NegativeNotAllowedException;

class FizzBuzz
{
    public const SEPARATEUR = ", ";
    public const MULTIPLE_FIZZ = 3;
    public const MULTIPLE_BUZZ = 5;
    public const FIZZ = "Fizz";
    public const BUZZ = "Buzz";

    public function generateFizzBuzz(int $nombre): string
    {
        if ($nombre <= 0) {
            throw new NegativeNotAllowedException($nombre);
        }
        $result = "";

        for ($i = 1; $i < $nombre; $i++) {
            $result .= $this->getFizzBuzz($i) . self::SEPARATEUR;
        }
        $result .= $this->getFizzBuzz($i);
        return $result;
    }

    private function getFizzBuzz(int $nombre): string
    {
        $resultatNombre = "";

        if ($nombre % self::MULTIPLE_FIZZ == 0) {
            $resultatNombre .= self::FIZZ;
        }
        if ($nombre % self::MULTIPLE_BUZZ == 0) {
            $resultatNombre .=  self::BUZZ;
        }
        if (empty($resultatNombre)) {
            $resultatNombre .= strval($nombre);
        }

        return $resultatNombre;
    }
}
