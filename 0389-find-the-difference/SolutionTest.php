<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals('e', $s->findTheDifference('abcd', 'abcde'));
        $this->assertEquals('a', $s->findTheDifference('a', 'aa'));
    }
}
