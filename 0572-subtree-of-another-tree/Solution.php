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
     * @param TreeNode $s
     * @param TreeNode $t
     * @return Boolean
     */
    function isSubtree($s, $t) {
        if (null == $t) {
            return true;
        }
        if (null == $s) {
            return false;
        }
        if ($s->val != $t->val) {
            return $this->isSubtree($s->left, $t) || $this->isSubtree($s->right, $t);
        } else {
            return $this->isSameTree($s, $t) || $this->isSubtree($s->left, $t) || $this->isSubtree($s->right, $t);
        }
    }

    private function isSameTree($s, $t) {
        if (null == $s && null == $t) {
            return true;
        }
        if (null == $s || null == $t) {
            return false;
        }
        if ($s->val != $t->val) {
            return false;
        }
        return $this->isSameTree($s->left, $t->left) && $this->isSameTree($s->right, $t->right);
    }
}
