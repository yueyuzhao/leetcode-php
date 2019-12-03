<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $arr = [];
        $length = count($nums);
        for ($i = 0; $i < $length; $i++) {
            $num = $nums[$i];
            if (isset($arr[$num]) && $i - $arr[$num] <= $k) {
                return true;
            }
            $arr[$num] = $i;
        }
        return false;
    }
}
