<?php

require_once './MinStack.php';

use PHPUnit\Framework\TestCase;

final class MinStackTest extends TestCase
{
    public function testSolution()
    {
        $minStack = new MinStack();
        $minStack->push(-2);
        $minStack->push(0);
        $minStack->push(-3);
        $this->assertEquals(-3, $minStack->getMin());
        $minStack->pop();
        $this->assertEquals(0, $minStack->top());
        $this->assertEquals(-2, $minStack->getMin());
    }
}
