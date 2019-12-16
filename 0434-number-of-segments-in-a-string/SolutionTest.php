<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(5, $s->countSegments('Hello, my name is John'));
        $this->assertEquals(6, $s->countSegments(', , , ,        a, eaefa'));
    }
}
