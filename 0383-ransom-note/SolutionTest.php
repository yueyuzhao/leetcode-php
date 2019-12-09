<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertFalse($s->canConstruct('a', 'b'));
        $this->assertFalse($s->canConstruct('aa', 'ab'));
        $this->assertTrue($s->canConstruct('aa', 'aab'));
    }
}
