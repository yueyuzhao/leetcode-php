<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->checkPerfectNumber(28));
        $this->assertFalse($s->checkPerfectNumber(9));
        $this->assertTrue($s->checkPerfectNumber(6));
        $this->assertFalse($s->checkPerfectNumber(1));
    }
}
