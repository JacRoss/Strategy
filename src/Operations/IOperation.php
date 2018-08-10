<?php

namespace Jackross\Strategy\Operations;

interface IOperation
{
    public function calculate(int $a, int $b): int;
}