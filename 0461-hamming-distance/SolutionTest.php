<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->hammingDistance(1, 4));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->hammingDistance2(1, 4));
    }
}
