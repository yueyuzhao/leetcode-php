<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->isPowerOfFour(4));
        $this->assertTrue($s->isPowerOfFour(16));
        $this->assertFalse($s->isPowerOfFour(5));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertTrue($s->isPowerOfFour2(4));
        $this->assertTrue($s->isPowerOfFour2(16));
        $this->assertFalse($s->isPowerOfFour2(5));
    }

    public function testSolution3()
    {
        $s = new Solution();
        $this->assertTrue($s->isPowerOfFour3(4));
        $this->assertTrue($s->isPowerOfFour3(16));
        $this->assertFalse($s->isPowerOfFour3(5));
    }

    public function testSolution4()
    {
        $s = new Solution();
        $this->assertTrue($s->isPowerOfFour4(4));
        $this->assertTrue($s->isPowerOfFour4(16));
        $this->assertFalse($s->isPowerOfFour4(5));
    }
}
