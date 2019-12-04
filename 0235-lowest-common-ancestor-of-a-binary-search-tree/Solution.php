<?php

require_once '../TreeNode.php';

/**
 * Definition for a binary tree node.
 * public class TreeNode {
 *     int val;
 *     TreeNode left;
 *     TreeNode right;
 *     TreeNode(int x) { val = x; }
 * }
 */
class Solution {
    public function lowestCommonAncestor(TreeNode $root, TreeNode $p, TreeNode $q) {
        if ($p->val < $root->val && $q->val < $root->val) {
            return $this->lowestCommonAncestor($root->left, $p, $q);
        } else if ($p->val > $root->val && $q->val > $root->val) {
            return $this->lowestCommonAncestor($root->right, $p, $q);
        }
        return $root;
    }
}
