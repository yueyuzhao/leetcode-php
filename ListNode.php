<?php

class ListNode {
    public $val = 0;
    public $next = null;

    /**
     * ListNode constructor.
     * @param int $val
     */
    public function __construct($val)
    {
        $this->val = $val;
    }

    public function toArray()
    {
        $res = [];
        $p = $this;
        while ($p) {
            $res[] = $p->val;
            $p = $p->next;
        }
        return $res;
    }

    public static function toListNode($nums) {
        $length = count($nums);
        $next = null;
        for ($i = $length - 1; $i >= 0; $i--) {
            $node = new ListNode($nums[$i]);
            $node->next = $next;
            $next = $node;
        }
        return $next;
    }
}
