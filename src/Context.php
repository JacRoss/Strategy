<?php

namespace Jackross\Strategy;

use Jackross\Strategy\Operations\{
    IOperation,
    Addition,
    Subtraction,
    Multiplication,
    Division
};

/**
 * Class Context
 * @package Jackross\Strategy
 * @property IOperation $strategy;
 */
class Context
{
    private $strategy;
    private $strategies = [
        '+' => Addition::class,
        '-' => Subtraction::class,
        '*' => Multiplication::class,
        '/' => Division::class
    ];

    public function __construct(string $operation)
    {
        $this->strategy = $this->getStrategy($operation);
    }

    private function getStrategy(string $operation): IOperation
    {
        if (!isset($this->strategies[$operation])) {
            throw new \InvalidArgumentException(sprintf('operation [%s] not support', $operation));
        }

        return new $this->strategies[$operation]();
    }

    public function calculate(int $a, int $b): int
    {
        return $this->strategy->calculate($a, $b);
    }
}