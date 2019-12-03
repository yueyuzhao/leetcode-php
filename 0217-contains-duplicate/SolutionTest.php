<?php


require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertTrue($s->containsDuplicate([1, 2, 3, 1]));
        $this->assertFalse($s->containsDuplicate([1, 2, 3, 4]));
        $this->assertTrue($s->containsDuplicate([1,1,1,3,3,4,3,2,4,2]));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertTrue($s->containsDuplicate2([1, 2, 3, 1]));
        $this->assertFalse($s->containsDuplicate2([1, 2, 3, 4]));
        $this->assertTrue($s->containsDuplicate2([1,1,1,3,3,4,3,2,4,2]));
    }

    public function testSolution3()
    {
        $s = new Solution();
        $this->assertTrue($s->containsDuplicate3([1, 2, 3, 1]));
        $this->assertFalse($s->containsDuplicate3([1, 2, 3, 4]));
        $this->assertTrue($s->containsDuplicate3([1,1,1,3,3,4,3,2,4,2]));
    }
}
