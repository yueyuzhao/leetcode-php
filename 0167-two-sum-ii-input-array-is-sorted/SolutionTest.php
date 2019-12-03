<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution() {
        $s = new Solution();
        $this->assertEquals([1, 2], $s->twoSum([2, 7, 11, 15], 9));
        $this->assertEquals([2, 3], $s->twoSum([5, 25, 75], 100));
    }
}
