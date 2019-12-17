<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(
            ["Gold Medal", "Silver Medal", "Bronze Medal", "4", "5"],
            $s->findRelativeRanks([5, 4, 3, 2, 1])
        );
        $this->assertEquals(
            ["Gold Medal", "5", "Bronze Medal", "Silver Medal", "4"],
            $s->findRelativeRanks([10, 3, 8, 9, 4])
        );
    }
}
