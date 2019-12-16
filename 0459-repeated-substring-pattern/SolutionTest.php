<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->repeatedSubstringPattern('abab'));
        $this->assertFalse($s->repeatedSubstringPattern('aba'));
        $this->assertTrue($s->repeatedSubstringPattern('abcabcabcabc'));
    }
}
