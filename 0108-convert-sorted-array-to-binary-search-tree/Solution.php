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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        if (empty($nums)) {
            return null;
        }
        $size = count($nums);
        $mid = floor($size / 2);
        $node = new TreeNode($nums[$mid]);
        $node->left = $this->sortedArrayToBST(array_slice($nums, 0, $mid));
        $node->right = $this->sortedArrayToBST(array_slice($nums, $mid + 1, $mid));
        return $node;
    }
}
