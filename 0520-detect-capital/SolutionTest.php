<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->detectCapitalUse('USA'));
        $this->assertTrue($s->detectCapitalUse('leetcode'));
        $this->assertTrue($s->detectCapitalUse('Google'));
        $this->assertFalse($s->detectCapitalUse('FlaG'));
    }
}
