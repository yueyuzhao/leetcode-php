<?php

require_once './Solution.php';
require_once './ListNode.php';

use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function testSolution()
    {
        $s = new Solution();
        $this->assertFalse($s->hasCycle(null));

        $head1 = $this->toListNode([3,2,0,-4], 1);
        $this->assertTrue($s->hasCycle($head1));

        $head2 = $this->toListNode([1, 2], 0);
        $this->assertTrue($s->hasCycle($head2));

        $head3 = $this->toListNode([1], -1);
        $this->assertFalse($s->hasCycle($head3));
    }

    /**
     * 数组和值生成链表
     *
     * @param $data
     * @param $pos
     * @return ListNode|null
     */
    private function toListNode($data, $pos)
    {
        if (empty($data)) {
            return null;
        }
        $head = null;
        $theOne = null;
        $prev = null;
        $size = count($data);
        for ($i = 0; $i < $size; $i++) {
            $node = new ListNode($i);
            if ($i == 0) {
                $head = $node;
            }
            if ($prev) {
                $prev->next = $node;
            }
            $prev = $node;
            if ($i == $pos) {
                $theOne = $node;
            }
            if ($size - 1 == $i) {
                $node->next = $theOne;
            }
        }
        return $head;
    }
}
