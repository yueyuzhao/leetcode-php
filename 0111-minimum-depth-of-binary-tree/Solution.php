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
    function minDepth($root) {
        if (null == $root) {
            return 0;
        }
        if (null == $root->left && null == $root->right) {
            return 1;
        }
        if (null == $root->left) {
            return $this->minDepth($root->right);
        }
        if (null == $root->right) {
            return $this->minDepth($root->left);
        }
        $left = $this->minDepth($root->left);
        $right = $this->minDepth($root->right);
        return 1 + min([$left, $right]);
    }
}