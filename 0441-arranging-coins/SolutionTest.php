<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->arrangeCoins(3));
        $this->assertEquals(2, $s->arrangeCoins(5));
        $this->assertEquals(3, $s->arrangeCoins(8));
    }
}
