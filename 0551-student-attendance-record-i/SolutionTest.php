<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->checkRecord('PPALLP'));
        $this->assertFalse($s->checkRecord('PPALLL'));
    }
}
