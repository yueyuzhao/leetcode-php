<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();

        $data = [0,1,0,3,12];
        $s->moveZeroes($data);
        $this->assertEquals([1,3,12,0,0], $data);

        $data2 = [0, 0, 1];
        $s->moveZeroes($data2);
        $this->assertEquals([1, 0, 0], $data2);
    }

    public function testSolution2()
    {
        $s = new Solution();

        $data = [0,1,0,3,12];
        $s->moveZeroes2($data);
        $this->assertEquals([1,3,12,0,0], $data);

        $data2 = [0, 0, 1];
        $s->moveZeroes2($data2);
        $this->assertEquals([1, 0, 0], $data2);
    }

    public function testSolution3()
    {
        $s = new Solution();

        $data = [0,1,0,3,12];
        $s->moveZeroes3($data);
        $this->assertEquals([1,3,12,0,0], $data);

        $data2 = [0, 0, 1];
        $s->moveZeroes3($data2);
        $this->assertEquals([1, 0, 0], $data2);
    }
}
