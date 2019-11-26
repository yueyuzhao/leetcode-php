<?php

require('./Solution.php');

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(0, $s->maxProfit([1]));
        $this->assertEquals(0, $s->maxProfit([1, 1]));
        $this->assertEquals(1, $s->maxProfit([1, 2]));
        $this->assertEquals(7, $s->maxProfit([7, 1, 5, 3, 6, 4]));
        $this->assertEquals(4, $s->maxProfit([1, 2, 3, 4, 5]));
        $this->assertEquals(0, $s->maxProfit([7, 6, 4, 3, 1]));
        $this->assertEquals(2, $s->maxProfit([2, 1, 2, 0, 1]));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(0, $s->maxProfit2([1]));
        $this->assertEquals(0, $s->maxProfit2([1, 1]));
        $this->assertEquals(1, $s->maxProfit2([1, 2]));
        $this->assertEquals(7, $s->maxProfit2([7, 1, 5, 3, 6, 4]));
        $this->assertEquals(4, $s->maxProfit2([1, 2, 3, 4, 5]));
        $this->assertEquals(0, $s->maxProfit2([7, 6, 4, 3, 1]));
        $this->assertEquals(2, $s->maxProfit2([2, 1, 2, 0, 1]));
    }
}
