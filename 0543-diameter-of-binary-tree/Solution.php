<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {
    private $res = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root) {
        $this->res = 0;
        $this->getDepth($root);
        return $this->res - 1;
    }

    function getDepth($root) {
        if (null == $root) {
            return 0;
        }
        $left = $this->getDepth($root->left);
        $right = $this->getDepth($root->right);
        $this->res = max($this->res, $left + $right + 1);
        return max($left, $right) + 1;
    }
}
