<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $arr = [1,2,3,4,5,6,7];
        $s->rotate($arr, 3);
        $this->assertEquals([5,6,7,1,2,3,4], $arr);

        $arr2 = [-1,-100,3,99];
        $s->rotate($arr2, 2);
        $this->assertEquals([3,99,-1,-100], $arr2);

        $arr3 = [1, 2];
        $s->rotate($arr3, 0);
        $this->assertEquals([1, 2], $arr3);
    }

    public function testSolution2()
    {
        $s = new Solution();
        $arr = [1,2,3,4,5,6,7];
        $s->rotate2($arr, 3);
        $this->assertEquals([5,6,7,1,2,3,4], $arr);

        $arr2 = [-1,-100,3,99];
        $s->rotate2($arr2, 2);
        $this->assertEquals([3,99,-1,-100], $arr2);

        $arr3 = [1, 2];
        $s->rotate2($arr3, 0);
        $this->assertEquals([1, 2], $arr3);
    }

    public function testSolution3()
    {
        $s = new Solution();
        $arr = [1,2,3,4,5,6,7];
        $s->rotate3($arr, 3);
        $this->assertEquals([5,6,7,1,2,3,4], $arr);

        $arr2 = [-1,-100,3,99];
        $s->rotate3($arr2, 2);
        $this->assertEquals([3,99,-1,-100], $arr2);

        $arr3 = [1, 2];
        $s->rotate3($arr3, 0);
        $this->assertEquals([1, 2], $arr3);
    }
}
