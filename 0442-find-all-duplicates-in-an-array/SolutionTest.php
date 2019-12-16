<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals([2, 3], $s->findDuplicates([4, 3, 2, 7, 8, 2, 3, 1]));
    }
}
