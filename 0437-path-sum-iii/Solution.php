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
     * @return Integer
     */
    function pathSum($root, $sum) {
        return $this->countPathSum($root, $sum);
    }

    function countPathSum($root, $sum, $link=false) {
        if (null == $root) {
            return 0;
        }
        $count = 0;
        if ($sum == $root->val) {
            $count += 1;
        }
        $leftVal = $sum - $root->val;
        if (null != $root->left) {
            if (!$link) {
                $count += $this->countPathSum($root->left, $sum);
            }
            $count += $this->countPathSum($root->left, $leftVal, true);
        }
        if (null != $root->right) {
            if (!$link) {
                $count += $this->countPathSum($root->right, $sum);
            }
            $count += $this->countPathSum($root->right, $leftVal, true);
        }
        return $count;
    }
}
