<?php


require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals([5, 6], $s->findDisappearedNumbers([4, 3, 2, 7, 8, 2, 3, 1]));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals([5, 6], $s->findDisappearedNumbers2([4, 3, 2, 7, 8, 2, 3, 1]));
    }
}
