<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals([-1, 3, -1], $s->nextGreaterElement([4, 1, 2], [1, 3, 4, 2]));
        $this->assertEquals([3, -1], $s->nextGreaterElement([2, 4], [1, 2, 3, 4]));
    }
}
