<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->isIsomorphic('egg', 'add'));
        $this->assertTrue($s->isIsomorphic('abab', 'baba'));
        $this->assertFalse($s->isIsomorphic('foo', 'bar'));
        $this->assertTrue($s->isIsomorphic('paper', 'title'));
        $this->assertFalse($s->isIsomorphic('aba', 'baa'));
    }
}
