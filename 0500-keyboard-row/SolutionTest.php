<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(["Alaska", "Dad"], $s->findWords(["Hello", "Alaska", "Dad", "Peace"]));
    }
}
