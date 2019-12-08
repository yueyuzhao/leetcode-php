<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $arr1 = ["h","e","l","l","o"];
        $s->reverseString($arr1);
        $this->assertEquals(["o","l","l","e","h"], $arr1);

        $arr2 = ["H","a","n","n","a","h"];
        $s->reverseString($arr2);
        $this->assertEquals(["h","a","n","n","a","H"], $arr2);
    }
}
