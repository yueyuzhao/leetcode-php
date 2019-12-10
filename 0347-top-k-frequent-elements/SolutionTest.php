<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals([1,2], $s->topKFrequent([1,1,1,2,2,3], 2));
        $this->assertEquals([0], $s->topKFrequent([3, 0, 1, 0], 1));
    }
}
