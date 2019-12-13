<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals('1a', $s->toHex(26));
        $this->assertEquals('ffffffff', $s->toHex(-1));
        $this->assertEquals('0', $s->toHex(0));
    }
}
