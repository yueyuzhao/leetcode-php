<?php

require_once './ListNode.php';

/**
 * @param {ListNode} head
 * @return {boolean}
 */
class Solution {

    /**
     * @param ListNode $head
     * @return bool
     */
    public function hasCycle($head) {
        if (null == $head || null == $head->next) {
            return false;
        }
        $slow = $head;
        $fast = $head->next;
        while ($slow != $fast) {
            if (null == $fast || null == $fast->next) {
                return false;
            }
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return true;
    }
}
