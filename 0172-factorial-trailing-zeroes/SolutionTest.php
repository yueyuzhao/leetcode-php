<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(0, $s->trailingZeroes(3));
        $this->assertEquals(1, $s->trailingZeroes(5));
        $this->assertEquals(2, $s->trailingZeroes(10));
        $this->assertEquals(2, $s->trailingZeroes(11));
        $this->assertEquals(3, $s->trailingZeroes(15));
        $this->assertEquals(4, $s->trailingZeroes(20));
        $this->assertEquals(6, $s->trailingZeroes(25));
        $this->assertEquals(6, $s->trailingZeroes(26));
        $this->assertEquals(7, $s->trailingZeroes(30));
        $this->assertEquals(452137076, $s->trailingZeroes(1808548329));
    }
}
