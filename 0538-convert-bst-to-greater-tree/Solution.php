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

    private $sum = 0;

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function convertBST($root) {
        if (null == $root) {
            return $root;
        }
        $this->convertBST($root->right);
        $this->sum += $root->val;
        $root->val = $this->sum;
        $this->convertBST($root->left);
        return $root;
    }
}
