<?php

require_once './Solution.php';
require_once '../ListNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $node = $s->reverseList(ListNode::transform([1, 2, 3, 4, 5]));
        $this->assertEquals([5, 4, 3, 2, 1], $node->toArray());
    }

    public function testSolution2()
    {
        $s = new Solution();
        $node = $s->reverseList2(ListNode::transform([1, 2, 3, 4, 5]));
        $this->assertEquals([5, 4, 3, 2, 1], $node->toArray());
    }
}
