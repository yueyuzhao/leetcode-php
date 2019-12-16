<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(3, $s->findLUSlength('aba', 'cdc'));
        $this->assertEquals(-1, $s->findLUSlength('aaa', 'aaa'));
    }
}
