<?php

namespace FizzBuzz;

use FizzBuzz\Exceptions\NegativeNotAllowedException;
use FizzBuzz\Exceptions\ZeroNotAllowedException;

class FizzBuzz
{
    private int $nombre;
    private ResolverInterface $resolver;

    public function __construct(
        int $nombre,
        ?ResolverInterface $resolver = null
    ) {
        $this->nombre = $nombre;
        $this->resolver = $this->makeResolver($resolver);
    }

    private function makeResolver(
        ?ResolverInterface $resolver = null
    ): ResolverInterface {
        if ($resolver === null) {
            return new Resolver($this->nombre);
        }
        return $resolver;
    }

    public function generateFizzBuzz(): string
    {

        if ($this->nombre < 0) {
            throw new NegativeNotAllowedException($this->nombre);
        }
        if ($this->nombre == 0) {
            throw new ZeroNotAllowedException();
        }


        $resolver = $this->resolver->resolve();
        return $resolver;
    }
}
