<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution(4);
        $this->assertEquals(4, $s->firstBadVersion(4));

        $s2 = new Solution(2);
        $this->assertEquals(2, $s2->firstBadVersion(2));
    }
}
