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
    function findTilt($root) {
        if (null == $root) {
            return 0;
        }
        $leftTilt = 0;
        $leftSum = 0;
        if (null != $root->left) {
            $leftTilt = $this->findTilt($root->left);
            $leftSum = $root->left->sum;
        }
        $rightTilt = 0;
        $rightSum = 0;
        if (null != $root->right) {
            $rightTilt = $this->findTilt($root->right);
            $rightSum = $root->right->sum;
        }
        $root->sum = $leftSum + $rightSum + $root->val;
        return $leftTilt + $rightTilt + abs($leftSum - $rightSum);
    }
}
