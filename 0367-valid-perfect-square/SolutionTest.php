<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->isPerfectSquare(16));
        $this->assertFalse($s->isPerfectSquare(14));
    }
}
