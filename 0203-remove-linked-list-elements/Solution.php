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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        while ($head && $head->val == $val) {
            $head  = $head->next;
        }
        if (null == $head) {
            return null;
        }
        $p = $head;
        do {
            if ($p->next == null) {
                break;
            }
            if ($p->next->val == $val) {
                $p->next = $p->next->next;
            } else {
                $p = $p->next;
            }
        } while ($p);
        return $head;
    }

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements2($head, $val) {
        $dumb = new ListNode(0);
        $dumb->next = $head;
        $p = $dumb;
        while ($p->next) {
            if ($p->next->val == $val) {
                $p->next = $p->next->next;
            } else {
                $p = $p->next;
            }
        }
        return $dumb->next;
    }
}
