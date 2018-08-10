<?php
/**
 * Created by PhpStorm.
 * User: xoka
 * Date: 8/10/18
 * Time: 3:37 PM
 */

namespace Jackross\Strategy\Operations;


class Addition implements IOperation
{

    public function calculate(int $a, int $b): int
    {
        return $a + $b;
    }
}