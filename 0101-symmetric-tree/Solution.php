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
    function isSymmetric($root) {
        return $this->isMirrored($root, $root);
    }

    function isMirrored($p, $q) {
        if (null == $p && null == $q) {
            return true;
        }
        if (null == $p || null == $q) {
            return false;
        }
        if ($p->val != $q->val) {
            return false;
        }
        return $this->isMirrored($p->left, $q->right) && $this->isMirrored($p->right, $q->left);
    }
}