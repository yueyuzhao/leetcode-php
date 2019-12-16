<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals([2, 2], $s->constructRectangle(4));
        $this->assertEquals([2, 1], $s->constructRectangle(2));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals([2, 2], $s->constructRectangle2(4));
        $this->assertEquals([2, 1], $s->constructRectangle2(2));
    }
}
