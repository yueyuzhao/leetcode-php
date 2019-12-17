<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals('202', $s->convertToBase7(100));
        $this->assertEquals('-10', $s->convertToBase7(-7));
        $this->assertEquals('0', $s->convertToBase7(0));
    }
}
