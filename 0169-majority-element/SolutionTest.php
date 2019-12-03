<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution() {
        $s = new Solution();
        $this->assertEquals(2, $s->majorityElement([2,2,1,1,1,2,2]));
        $this->assertEquals(3, $s->majorityElement([3,2,3]));
    }

    public function testSolution1() {
        $s = new Solution();
        $this->assertEquals(2, $s->majorityElement1([2,2,1,1,1,2,2]));
        $this->assertEquals(3, $s->majorityElement1([3,2,3]));
    }

    public function testSolution2() {
        $s = new Solution();
        $this->assertEquals(2, $s->majorityElement2([2,2,1,1,1,2,2]));
        $this->assertEquals(3, $s->majorityElement2([3,2,3]));
    }

    public function testSolution3() {
        $s = new Solution();
        $this->assertEquals(2, $s->majorityElement3([2,2,1,1,1,2,2]));
        $this->assertEquals(3, $s->majorityElement3([3,2,3]));
    }
}
