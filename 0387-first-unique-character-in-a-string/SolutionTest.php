<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(0, $s->firstUniqChar('leetcode'));

        $this->assertEquals(2, $s->firstUniqChar('loveleetcode'));

        $this->assertEquals(-1, $s->firstUniqChar('fdsafdsa'));
    }
}
