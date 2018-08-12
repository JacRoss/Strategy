<?php

namespace Jackross\Strategy\Operations;

interface IOperation
{
    public static function operationKey(): string;

    public function calculate(int $a, int $b): int;
}