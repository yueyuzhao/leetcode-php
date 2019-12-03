<?php

require_once './Solution.php';
require_once '../ListNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertFalse($s->isPalindrome(ListNode::transform([1, 2])));
        $this->assertTrue($s->isPalindrome(ListNode::transform([1, 2, 1])));
        $this->assertFalse($s->isPalindrome(ListNode::transform([10, 2, 0, 1])));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $this->assertFalse($s->isPalindrome2(ListNode::transform([1, 2])));
        $this->assertTrue($s->isPalindrome2(ListNode::transform([1, 2, 1])));
        $this->assertFalse($s->isPalindrome2(ListNode::transform([10, 2, 0, 1])));
    }
}
