<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $chars1 = ["a","a","b","b","c","c","c"];
        $this->assertEquals(6, $s->compress($chars1));
        $this->assertEquals(["a","2","b","2","c","3"], $chars1);

        $chars2 = ["a"];
        $this->assertEquals(1, $s->compress($chars2));
        $this->assertEquals(['a'], $chars2);

        $chars3 = ["a","b","b","b","b","b","b","b","b","b","b","b","b"];
        $this->assertEquals(4, $s->compress($chars3));
        $this->assertEquals(["a","b","1","2"], $chars3);
    }
}
