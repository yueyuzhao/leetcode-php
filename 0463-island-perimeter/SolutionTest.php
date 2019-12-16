<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(16, $s->islandPerimeter([
            [0,1,0,0],
            [1,1,1,0],
            [0,1,0,0],
            [1,1,0,0],
        ]));
    }
}
