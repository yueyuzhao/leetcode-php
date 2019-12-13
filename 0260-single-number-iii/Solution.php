<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function singleNumber($nums) {
        $data = [];
        foreach (array_count_values($nums) as $key => $val) {
            if ($val == 1) {
                $data[] = $key;
            }
        }
        return $data;
    }
}
