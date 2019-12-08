<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->isUgly(6));
        $this->assertTrue($s->isUgly(8));
        $this->assertFalse($s->isUgly(14));
    }
}
