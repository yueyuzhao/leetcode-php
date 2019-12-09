<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(3, $s->getSum(1, 2));
        $this->assertEquals(1, $s->getSum(-1, 2));
    }
}
