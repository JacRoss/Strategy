<?php

namespace Jackross\Strategy\Operations;

class Subtraction implements IOperation
{

    public static function operationKey(): string
    {
        return '-';
    }

    public function calculate(int $a, int $b): int
    {
        return $a - $b;
    }
}