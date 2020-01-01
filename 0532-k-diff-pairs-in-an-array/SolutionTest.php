<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->findPairs([3, 1, 4, 1, 5], 2));
        $this->assertEquals(4, $s->findPairs([1, 2, 3, 4, 5], 1));
        $this->assertEquals(1, $s->findPairs([1, 3, 1, 5, 4], 0));
    }
}
