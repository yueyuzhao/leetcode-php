<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest($nums, $k) {
        arsort($nums);
        $data = array_values($nums);
        return $data[$k - 1];
    }
}
