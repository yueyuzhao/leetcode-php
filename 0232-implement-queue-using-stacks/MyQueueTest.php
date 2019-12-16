<?php

require_once './MyQueue.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $queue = new MyQueue();
        $queue->push(1);
        $queue->push(2);
        $this->assertEquals(1, $queue->peek());
        $this->assertEquals(1, $queue->pop());
        $this->assertFalse($queue->empty());
    }
}
