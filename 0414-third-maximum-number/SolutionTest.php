<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(1, $s->thirdMax([3, 2, 1]));
        $this->assertEquals(2, $s->thirdMax([2, 1]));
        $this->assertEquals(1, $s->thirdMax([2, 3, 2, 1]));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(1, $s->thirdMax2([3, 2, 1]));
        $this->assertEquals(2, $s->thirdMax2([2, 1]));
        $this->assertEquals(1, $s->thirdMax2([2, 3, 2, 1]));
    }
}
