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
    private $res = [];

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function levelOrderBottom($root) {
        $this->res = [];
        $this->levelUp($root, 0);
        return array_reverse($this->res);
    }

    function levelUp($root, $level) {
        if (null == $root) {
            return;
        }
        if (!isset($this->res[$level])) {
            $this->res[$level] = [];
        }
        $this->res[$level][] = $root->val;
        $this->levelUp($root->left, $level + 1);
        $this->levelUp($root->right, $level + 1);
    }
}
