<?php

class NumArray {
    private $nums;

    /**
     * @param Integer[] $nums
     */
    function __construct($nums) {
        $this->nums = $nums;
    }

    /**
     * @param Integer $i
     * @param Integer $j
     * @return Integer
     */
    function sumRange($i, $j) {
        return array_sum(array_slice($this->nums, $i, $j - $i + 1));
    }
}

/**
 * Your NumArray object will be instantiated and called as such:
 * $obj = NumArray($nums);
 * $ret_1 = $obj->sumRange($i, $j);
 */
