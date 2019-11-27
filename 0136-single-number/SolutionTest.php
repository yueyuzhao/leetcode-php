<?php

require('./Solution.php');

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(1, $s->singleNumber([2, 2, 1]));
        $this->assertEquals(4, $s->singleNumber([4, 1, 2, 1, 2]));
    }
}
