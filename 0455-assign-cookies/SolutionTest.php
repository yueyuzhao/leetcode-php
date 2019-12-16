<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(1, $s->findContentChildren([1, 2, 3], [1, 1]));
        $this->assertEquals(2, $s->findContentChildren([1, 2], [1, 2, 3]));
    }
}
