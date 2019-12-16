<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minMoves($nums) {
        sort($nums);
        $size = count($nums);
        $mid = $nums[floor($size / 2)];
        $moves = 0;
        for ($i = 0; $i < $size; $i++) {
            $moves += abs($nums[$i] - $mid);
        }
        return $moves;
    }
}
