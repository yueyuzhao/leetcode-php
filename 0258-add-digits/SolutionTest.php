<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->addDigits(38));
        $this->assertEquals(0, $s->addDigits(0));
        $this->assertEquals(2, $s->addDigits(128));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->addDigits2(38));
        $this->assertEquals(0, $s->addDigits2(0));
        $this->assertEquals(2, $s->addDigits2(128));
    }

    public function testSolution3()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->addDigits3(38));
        $this->assertEquals(0, $s->addDigits3(0));
        $this->assertEquals(2, $s->addDigits3(128));
    }

    public function testSolution4()
    {
        $s = new Solution();
        $this->assertEquals(2, $s->addDigits4(38));
        $this->assertEquals(0, $s->addDigits4(0));
        $this->assertEquals(2, $s->addDigits4(128));
    }
}
