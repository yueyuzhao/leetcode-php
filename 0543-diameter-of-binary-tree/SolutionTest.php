<?php

require_once './Solution.php';
require_once '../TreeNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $node = TreeNode::transform([1, 2, 3]);
        $this->assertEquals(2, $s->diameterOfBinaryTree($node));
    }
}
