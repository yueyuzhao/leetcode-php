<?php

require_once '../ListNode.php';

/**
 * Definition for singly-linked list.
 * public class ListNode {
 *     int val;
 *     ListNode next;
 *     ListNode(int x) { val = x; }
 * }
 */
class Solution {
    public function deleteNode(ListNode $node) {
        $node->val = $node->next->val;
        $node->next = $node->next->next;
    }
}
