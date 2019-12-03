<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(1, $s->titleToNumber('A'));
        $this->assertEquals(2, $s->titleToNumber('B'));
        $this->assertEquals(26, $s->titleToNumber('Z'));
        $this->assertEquals(701, $s->titleToNumber('ZY'));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(1, $s->titleToNumber2('A'));
        $this->assertEquals(2, $s->titleToNumber2('B'));
        $this->assertEquals(26, $s->titleToNumber2('Z'));
        $this->assertEquals(701, $s->titleToNumber2('ZY'));
    }
}
