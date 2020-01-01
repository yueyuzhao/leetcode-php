<?php

require_once './Solution.php';
require_once '../TreeNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $node = TreeNode::transform([5, 2, 13]);
        $s->convertBST($node);
        $this->assertEquals([18, 20, 13], $node->toArray());
    }
}
