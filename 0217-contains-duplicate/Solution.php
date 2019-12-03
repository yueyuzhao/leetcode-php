<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        return count($nums) != count(array_unique($nums));
    }

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate2($nums) {
        $arr = [];
        foreach ($nums as $num) {
            if (isset($arr[$num])) {
                return true;
            }
            $arr[$num] = 1;
        }
        return false;
    }

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate3($nums) {
        return count(array_flip($nums)) != count($nums);
    }
}
