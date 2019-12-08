<?php

require_once '../ListNode.php';

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
     * @return ListNode
     */
    function reverseList($head) {
        $values = [];
        while ($head) {
            array_unshift($values, $head->val);
            $head = $head->next;
        }
        $p = $head = new ListNode($values[0]);
        $size = count($values);
        for($i = 1; $i < $size; $i++) {
            $n = new ListNode($values[$i]);
            $p->next = $n;
            $p = $n;
        }
        return $head;
    }

    function reverseList2($head) {
        if (!$head->next) {
            return $head;
        }
        $prev = $this->reverseList2($head->next);

        $p = $prev;
        while ($p && $p->next) {
            $p = $p->next;
        }
        $head->next = null;
        $p->next = $head;
        return $prev;
    }
}
