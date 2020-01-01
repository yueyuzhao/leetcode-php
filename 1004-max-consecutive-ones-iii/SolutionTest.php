<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(6, $s->longestOnes([1,1,1,0,0,0,1,1,1,1,0], 2));
        $this->assertEquals(10, $s->longestOnes([0,0,1,1,0,0,1,1,1,0,1,1,0,0,0,1,1,1,1], 3));
    }
}
