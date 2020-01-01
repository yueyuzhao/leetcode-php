<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals("s'teL ekat edoCteeL tsetnoc", $s->reverseWords("Let's take LeetCode contest"));
    }
}
