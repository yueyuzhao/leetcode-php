<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution() {
        $s = new Solution();
        $this->assertEquals('A', $s->convertToTitle(1));
        $this->assertEquals('Z', $s->convertToTitle(26));
        $this->assertEquals('AB', $s->convertToTitle(28));
        $this->assertEquals('ZY', $s->convertToTitle(701));
    }
}
