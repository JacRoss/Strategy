<?php

namespace Jackross\Strategy\Operations;

class Division implements IOperation
{

    public function calculate(int $a, int $b): int
    {
        return intdiv($a, $b);
    }
}