<?php

require_once './Solution.php';
require_once '../ListNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $node = ListNode::toListNode([1, 2, 6, 3, 4, 5, 6]);
        $node = $s->removeElements($node, 6);
        $this->assertEquals([1, 2, 3, 4, 5], $node->toArray());

        $node2 = ListNode::toListNode([6, 6, 1, 2, 3]);
        $node2 = $s->removeElements($node2, 6);
        $this->assertEquals([1, 2, 3], $node2->toArray());
    }

    public function testSolution2()
    {
        $s = new Solution();
        $node = ListNode::toListNode([1, 2, 6, 3, 4, 5, 6]);
        $node = $s->removeElements2($node, 6);
        $this->assertEquals([1, 2, 3, 4, 5], $node->toArray());

        $node2 = ListNode::toListNode([6, 6, 1, 2, 3]);
        $node2 = $s->removeElements2($node2, 6);
        $this->assertEquals([1, 2, 3], $node2->toArray());
    }
}
