<?php

namespace FizzBuzz;

class ResolverRecursif implements ResolverInterface
{
    public const SEPARATEUR = ", ";
    public const MULTIPLE_FIZZ = 3;
    public const MULTIPLE_BUZZ = 5;
    public const FIZZ = "Fizz";
    public const BUZZ = "Buzz";


    private int $nombre;

    public function __construct(
        int $nombre
    ) {
        $this->nombre = $nombre;
    }


    public function resolve(): string
    {
        $result = "";
        for ($i = 1; $i < $this->nombre; $i++) {
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
