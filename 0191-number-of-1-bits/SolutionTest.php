<?php


require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(3, $s->hammingWeight(0b00000000000000000000000000001011));
        $this->assertEquals(1, $s->hammingWeight(0b00000000000000000000000010000000));
        $this->assertEquals(31, $s->hammingWeight(0b11111111111111111111111111111101));
    }
}
