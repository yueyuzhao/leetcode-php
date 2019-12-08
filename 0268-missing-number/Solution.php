<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $size = count($nums);
        $str = str_repeat('1', $size + 1);
        foreach($nums as $num) {
            $str{$num} = '0';
        }
        return strpos($str, '1');
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber2($nums) {
        $size = count($nums);
        return $size * ($size + 1) / 2 - array_sum($nums);
    }
}
