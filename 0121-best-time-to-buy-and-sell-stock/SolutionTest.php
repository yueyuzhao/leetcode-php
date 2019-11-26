<?php

require('./Solution.php');

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testOne()
    {
        $s = new Solution();
        $this->assertEquals(5, $s->maxProfit([7,1,5,3,6,4]));
        $this->assertEquals(0, $s->maxProfit([7,6,4,3,1]));
        $this->assertEquals(3, $s->maxProfit([2,1,4]));
    }
}
