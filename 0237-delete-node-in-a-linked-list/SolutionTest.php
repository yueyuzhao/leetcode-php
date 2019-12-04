<?php

require_once './Solution.php';
require_once '../ListNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $node1 = ListNode::transform([4, 5, 1, 9]);
        $s->deleteNode($this->getNode($node1, 5));
        $this->assertEquals([4, 1, 9], $node1->toArray());

        $node2 = ListNode::transform([4, 5, 1, 9]);
        $s->deleteNode($this->getNode($node2,1));
        $this->assertEquals([4, 5, 9], $node2->toArray());

        $node3 = ListNode::transform([4, 5, 1, 9]);
        $s->deleteNode($this->getNode($node3,4));
        $this->assertEquals([5, 1, 9], $node3->toArray());
    }

    private function getNode(ListNode $node, $val) {
        do {
            if ($node->val == $val) {
                return $node;
            }
            $node = $node->next;
        } while ($node);
        throw new Exception("val is not in given ListNode");
    }
}
