<?php

namespace Jackross\Strategy\Operations;

class Addition implements IOperation
{

    public static function operationKey(): string
    {
        return '+';
    }

    public function calculate(int $a, int $b): int
    {
        return $a + $b;
    }
}