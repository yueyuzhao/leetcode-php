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
     * @return Boolean
     */
    function isBalanced($root) {
        if (null == $root) {
            return true;
        }
        $d = abs($this->getTreeDepth($root->left) - $this->getTreeDepth($root->right));

        return ($d <= 1) && $this->isBalanced($root->left) && $this->isBalanced($root->right);
    }

    function getTreeDepth($tree)
    {
        if (null == $tree) {
            return 0;
        }
        if (isset($tree->depth)) {
            $tree->depth = 1 + max([$this->getTreeDepth($tree->left), $this->getTreeDepth($tree->right)]);
        }
        return $tree->depth;
    }
}