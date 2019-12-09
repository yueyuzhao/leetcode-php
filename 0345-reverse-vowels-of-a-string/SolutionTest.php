<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals('holle', $s->reverseVowels('hello'));
        $this->assertEquals('leotcede', $s->reverseVowels('leetcode'));
        $this->assertEquals('Aa', $s->reverseVowels('aA'));
    }
}
