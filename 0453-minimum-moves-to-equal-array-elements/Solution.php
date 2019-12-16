<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minMoves($nums) {
        $min = min($nums);
        $moves = 0;
        foreach ($nums as $num) {
            $moves += $num - $min;
        }
        return $moves;
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minMoves2($nums) {
        return array_sum($nums) - min($nums) * count($nums);
    }
}
