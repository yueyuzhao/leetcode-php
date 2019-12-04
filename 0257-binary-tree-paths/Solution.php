<?php

require_once '../TreeNode.php';

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
     * @return String[]
     */
    function binaryTreePaths($root) {
        $paths = [];
        if (null == $root) {
            return $paths;
        }
        if ($root->left) {
            $paths = $this->binaryTreePaths($root->left);
        }
        if ($root->right) {
            $paths = array_merge($paths, $this->binaryTreePaths($root->right));
        }
        if (null == $root->left && null == $root->right) {
            return [strval($root->val)];
        }
        $size = count($paths);
        for ($i = 0; $i < $size; $i++) {
            $paths[$i] = "{$root->val}->" . $paths[$i];
        }
        return $paths;
    }
}
