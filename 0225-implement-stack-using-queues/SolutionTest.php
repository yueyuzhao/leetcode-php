<?php

require_once './MyStack.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new MyStack();
        $s->push(3);
        $s->push(2);
        $this->assertEquals(2, $s->top());
        $this->assertEquals(2, $s->pop());
        $this->assertFalse($s->empty());
    }
}
