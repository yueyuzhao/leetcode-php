<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome($head) {
        $data = [];
        while ($head) {
            $data[] = $head->val;
            $head = $head->next;
        }
        $size = count($data);
        for ($i = 0; $i < $size / 2; $i++) {
            if ($data[$i] !== $data[$size - $i - 1]) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome2($head) {
        $s1 = '';
        $s2 = '';
        while ($head) {
            $s1 .= $head->val;
            $s2 = $head->val . $s2;
            $head = $head->next;
        }
        return $s1 == $s2;
    }
}
