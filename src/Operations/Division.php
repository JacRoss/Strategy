<?php

namespace Jackross\Strategy\Operations;

class Division implements IOperation
{

    /**
     * @param int $a
     * @param int $b
     * @return int
     *
     * @throws \DivisionByZeroError
     */
    public function calculate(int $a, int $b): int
    {
        return intdiv($a, $b);
    }
}