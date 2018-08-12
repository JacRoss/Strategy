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
        Addition::class,
        Subtraction::class,
        Multiplication::class,
        Division::class
    ];

    public function __construct(string $operation)
    {
        $this->strategy = $this->getStrategy($operation);
    }

    private function getStrategy(string $operation): IOperation
    {
        $strategyClassName = $this->findStrategy($operation);
        return new $strategyClassName();
    }

    private function findStrategy(string $operation): string
    {
        foreach ($this->strategies as $value) {
            if ($value::operationKey() === $operation) {
                return $value;
            }
        }

        throw new \InvalidArgumentException(sprintf('operation [%s] not support', $operation));
    }

    public function calculate(int $a, int $b): int
    {
        return $this->strategy->calculate($a, $b);
    }
}