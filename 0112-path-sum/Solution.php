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
     * @param Integer $sum
     * @return Boolean
     */
    function hasPathSum($root, $sum) {
        if (null == $root) {
            return false;
        }
        $left = $sum - $root->val;
        if ($left == 0 && null == $root->left && null == $root->right) {
            return true;
        }
        return $this->hasPathSum($root->left, $left) || $this->hasPathSum($root->right, $left);
    }
}