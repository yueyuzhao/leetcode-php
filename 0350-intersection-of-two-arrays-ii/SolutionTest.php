<?php


require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals([2, 2], $s->intersect([1, 2, 2, 1], [2, 2]));
        $this->assertEquals([4, 9], $s->intersect([4, 9, 5], [9, 4, 9, 8, 4]));
    }
}
