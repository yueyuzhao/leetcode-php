<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $data = array_count_values($nums);
        $data = array_flip($data);
        return $data[1];
    }
}
