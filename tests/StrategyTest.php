<?php

use Jackross\Strategy\Context;

class StrategyTest extends \PHPUnit\Framework\TestCase
{
    private $a = 93;
    private $b = 25;

    public function testEmptyStrategy()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Context('%');
    }

    public function testAdditionStrategy()
    {
        $context = new Context('+');
        $this->assertEquals($this->a + $this->b, $context->calculate($this->a, $this->b));
    }

    public function testSubtractionStrategy()
    {
        $context = new Context('-');
        $this->assertEquals($this->a - $this->b, $context->calculate($this->a, $this->b));
    }

    public function testMultiplicationStrategy()
    {
        $context = new Context('*');
        $this->assertEquals($this->a * $this->b, $context->calculate($this->a, $this->b));
    }

    public function testDivisionStrategy()
    {
        $context = new Context('/');
        $this->assertEquals(intdiv($this->a, $this->b), $context->calculate($this->a, $this->b));
    }

    public function testDivisionByZero()
    {
        $this->expectException(DivisionByZeroError::class);
        $context = new Context('/');
        $context->calculate($this->a, 0);
    }
}