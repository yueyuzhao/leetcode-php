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

    private $data = [];

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function findMode($root) {
        if (null == $root) {
            return [];
        }
        $this->data = [];
        $this->countNum($root);
        arsort($this->data);
        $max = max($this->data);
        $res = [];
        foreach ($this->data as $key => $val) {
            if ($val == $max) {
                $res[] = $key;
            }
        }
        return $res;
    }

    function countNum($root) {
        if (null == $root) {
            return;
        }
        if (!isset($this->data[$root->val])) {
            $this->data[$root->val] = 0;
        }
        $this->data[$root->val] += 1;
        $this->countNum($root->left);
        $this->countNum($root->right);
    }
}
