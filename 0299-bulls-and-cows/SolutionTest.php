<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();

        $this->assertEquals('1A3B', $s->getHint('1807', '7810'));
        $this->assertEquals('1A1B', $s->getHint('1123', '0111'));
        $this->assertEquals('0A4B', $s->getHint('1122', '2211'));
    }
}
