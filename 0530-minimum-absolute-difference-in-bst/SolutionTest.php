<?php

require_once '../TreeNode.php';
require_once './Solution.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $node = TreeNode::transform([5, 4, 7]);
        $this->assertEquals(1, $s->getMinimumDifference($node));
    }
}
