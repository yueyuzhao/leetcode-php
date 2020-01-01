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
     * @return Integer
     */
    function getMinimumDifference($root) {
        $this->data = [];
        $this->addTo($root);
        sort($this->data);
        $size = count($this->data);
        $min = $this->data[1] - $this->data[0];
        for ($i = 2; $i < $size; $i++) {
            $min = min($min, $this->data[$i] - $this->data[$i - 1]);
        }
        return $min;
    }

    function addTo($root) {
        $this->data[] = $root->val;
        if ($root->left) {
            $this->addTo($root->left);
        }
        if ($root->right) {
            $this->addTo($root->right);
        }
    }
}
