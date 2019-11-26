<?php

require('./Solution.php');

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testOne()
    {
        $s = new Solution();
        $this->assertTrue($s->isPalindrome(''));
        $this->assertTrue($s->isPalindrome('A man, a plan, a canal: Panama'));
        $this->assertFalse($s->isPalindrome('race a car'));
    }
}
