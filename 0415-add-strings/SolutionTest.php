<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals('701', $s->addStrings('678', '23'));
        $this->assertEquals('10', $s->addStrings('1', '9'));
    }
}
