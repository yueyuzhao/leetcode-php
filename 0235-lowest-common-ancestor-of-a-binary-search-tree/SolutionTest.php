<?php

require_once './Solution.php';
require_once '../TreeNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $root = TreeNode::transform([6,2,8,0,4,7,9,null,null,3,5]);

        $s = new Solution();

        $node = $s->lowestCommonAncestor($root, new TreeNode(2), new TreeNode(8));
        $this->assertEquals(6, $node->val);

        $node2 = $s->lowestCommonAncestor($root, new TreeNode(2), new TreeNode(4));
        $this->assertEquals(2, $node2->val);

        $root2 = TreeNode::transform([2, 1]);
        $node3 = $s->lowestCommonAncestor($root2, new TreeNode(2), new TreeNode(1));
        $this->assertEquals(2, $node3->val);
    }
}
