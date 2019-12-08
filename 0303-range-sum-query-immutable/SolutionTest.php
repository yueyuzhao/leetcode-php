<?php

require_once './NumArray.php';
require_once './NumArray2.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new NumArray([-2, 0, 3, -5, 2, -1]);
        $this->assertEquals(1, $s->sumRange(0, 2));
        $this->assertEquals(-1, $s->sumRange(2, 5));
        $this->assertEquals(-3, $s->sumRange(0, 5));
    }

    public function testSolution2()
    {
        $s = new NumArray2([-2, 0, 3, -5, 2, -1]);
        $this->assertEquals(1, $s->sumRange(0, 2));
        $this->assertEquals(-1, $s->sumRange(2, 5));
        $this->assertEquals(-3, $s->sumRange(0, 5));
    }
}
