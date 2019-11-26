<?php

require('./Solution.php');

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals([1], $s->generate(0));
        $this->assertEquals([1, 1], $s->generate(1));
        $this->assertEquals([1, 2, 1], $s->generate(2));
        $this->assertEquals([1, 3, 3, 1], $s->generate(3));
        $this->assertEquals([1, 4, 6, 4, 1], $s->generate(4));
    }
}
