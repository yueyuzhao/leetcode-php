<?php

require_once './Solution.php';
require_once '../TreeNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $node = new TreeNode(1);
        $node->left = new TreeNode(2);
        $node->right = new TreeNode(3);
        $this->assertEquals(1, $s->findTilt($node));
    }
}
