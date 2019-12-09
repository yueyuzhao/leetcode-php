<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution(6);
        $this->assertEquals(6, $s->guessNumber(10));
    }
}
