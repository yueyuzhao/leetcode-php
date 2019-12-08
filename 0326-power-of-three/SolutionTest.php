<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->isPowerOfThree(27));

        $this->assertTrue($s->isPowerOfThree2(27));

        $this->assertTrue($s->isPowerOfThree3(27));

        $this->assertTrue($s->isPowerOfThree4(27));
    }
}
