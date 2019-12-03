<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->isPowerOfTwo(1));
        $this->assertTrue($s->isPowerOfTwo(16));
        $this->assertFalse($s->isPowerOfTwo(218));
        $this->assertFalse($s->isPowerOfTwo(0));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertTrue($s->isPowerOfTwo2(1));
        $this->assertTrue($s->isPowerOfTwo2(16));
        $this->assertFalse($s->isPowerOfTwo2(218));
        $this->assertFalse($s->isPowerOfTwo2(0));
    }
}
