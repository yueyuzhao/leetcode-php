<?php

require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->containsNearbyDuplicate([1, 2, 3, 1], 3));
        $this->assertTrue($s->containsNearbyDuplicate([1, 0, 1, 1], 1));
        $this->assertFalse($s->containsNearbyDuplicate([1, 2, 3, 1, 2, 3], 2));
        $this->assertTrue($s->containsNearbyDuplicate([99, 99], 2));
    }
}
