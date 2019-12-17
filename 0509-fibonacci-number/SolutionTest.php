<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(1, $s->fib(2));
        $this->assertEquals(2, $s->fib(3));
        $this->assertEquals(3, $s->fib(4));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(1, $s->fib2(2));
        $this->assertEquals(2, $s->fib2(3));
        $this->assertEquals(3, $s->fib2(4));
    }
}
