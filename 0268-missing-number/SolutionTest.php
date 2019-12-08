<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->missingNumber([3, 0, 1]));
        $this->assertEquals(8, $s->missingNumber([9,6,4,2,3,5,7,0,1]));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->missingNumber2([3, 0, 1]));
        $this->assertEquals(8, $s->missingNumber2([9,6,4,2,3,5,7,0,1]));
    }
}
