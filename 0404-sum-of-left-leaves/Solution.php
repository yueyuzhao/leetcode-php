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

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumOfLeftLeaves($root) {
        if (null == $root) {
            return 0;
        }
        if ($this->isLeaf($root->left)) {
            $sum = $root->left->val;
        } else {
            $sum = $this->sumOfLeftLeaves($root->left);
        }
        return $sum + $this->sumOfLeftLeaves($root->right);
    }

    function isLeaf($node) {
        return null == $node->left && null == $node->right;
    }
}
