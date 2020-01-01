<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->numberOfBoomerangs([[0,0],[1,0],[2,0]]));
        $this->assertEquals(20, $s->numberOfBoomerangs([[0,0],[1,0],[-1,0],[0,1],[0,-1]]));
    }
}
