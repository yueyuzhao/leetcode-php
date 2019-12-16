<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(3, $s->findMaxConsecutiveOnes([1,1,0,1,1,1]));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(3, $s->findMaxConsecutiveOnes2([1,1,0,1,1,1]));
    }
}
