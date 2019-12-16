<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(5, $s->findKthLargest([3,2,1,5,6,4], 2));
        $this->assertEquals(4, $s->findKthLargest([3,2,3,1,2,4,5,5,6], 4));
    }
}
