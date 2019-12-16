<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->findComplement(5));
        $this->assertEquals(0, $s->findComplement(1));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->findComplement2(5));
        $this->assertEquals(0, $s->findComplement2(1));
    }

    public function testSolution3()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->findComplement3(5));
        $this->assertEquals(0, $s->findComplement3(1));
    }

    public function testSolution4()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->findComplement4(5));
        $this->assertEquals(0, $s->findComplement4(1));
    }
}
