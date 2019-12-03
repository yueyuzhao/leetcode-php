<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(964176192, $s->reverseBits(0b00000010100101000001111010011100));
        $this->assertEquals(3221225471, $s->reverseBits(0b11111111111111111111111111111101));
    }
}
