<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(3, $s->minMoves([1, 2, 3]));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(3, $s->minMoves2([1, 2, 3]));
    }
}
