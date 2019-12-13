<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();

        $this->assertEquals([3, 5], $s->singleNumber([1,2,1,3,2,5]));
    }
}
