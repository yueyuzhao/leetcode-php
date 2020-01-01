<?php

require_once './Solution.php';
require_once '../TreeNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $nodeT = new TreeNode(4);
        $nodeT->left = new TreeNode(1);
        $nodeT->right = new TreeNode(2);
        $nodeS = new TreeNode(3);
        $nodeS->left = $nodeT;
        $nodeS->right = new TreeNode(5);

        $this->assertTrue($s->isSubtree($nodeS, $nodeT));
    }

    public function testSolution2()
    {
        $s = new Solution();
        $nodeZero = new TreeNode(0);
        $treeS = new TreeNode(1);
        $treeS->left = $nodeZero;
        $this->assertFalse($s->isSubtree($treeS, new TreeNode(1)));
    }

    public function testSolution3()
    {
        $s = new Solution();
        $node0 = new TreeNode(0);
        $node1 = new TreeNode(1);
        $node1->left = $node0;
        $node4 = new TreeNode(4);
        $node4->left = $node1;
        $node4->right = new TreeNode(2);
        $nodeS = new TreeNode(3);
        $nodeS->left = $node4;
        $nodeS->right = new TreeNode(5);

        $nodeT = new TreeNode(4);
        $nodeT->left = new TreeNode(1);
        $nodeT->right = new TreeNode(2);
        $this->assertFalse($s->isSubtree($nodeS, $nodeT));
    }

    public function testSolution4()
    {
        $s = new Solution();
        $nodeS = new TreeNode(3);

        $node4 = new TreeNode(4);
        $node4->left = new TreeNode(1);
        $nodeS->left = $node4;

        $node5 = new TreeNode(5);
        $node5->left = new TreeNode(2);
        $nodeS->right = $node5;

        $nodeT = new TreeNode(3);
        $nodeT->left = new TreeNode(1);
        $nodeT->right = new TreeNode(2);
        $this->assertFalse($s->isSubtree($nodeS, $nodeT));
    }
}
