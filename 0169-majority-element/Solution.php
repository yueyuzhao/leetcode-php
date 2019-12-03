<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $data = array_count_values($nums);
        $length = count($nums) / 2;
        foreach ($data as $key => $value) {
            if ($value > $length) {
                return $key;
            }
        }
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement1($nums) {
        $c = count($nums) / 2;
        $hashed = [];
        foreach ($nums as $num) {
            if (!isset($hashed[$num])) {
                $hashed[$num] = 1;
            } else {
                $hashed[$num] += 1;
            }
            if ($hashed[$num] > $c) {
                return $num;
            }
        }
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement2($nums) {
        $count = 0;
        $temp = null;
        foreach ($nums as $num) {
            if ($count == 0) {
                $temp = $num;
            }
            if ($temp == $num) {
                $count += 1;
            } else {
                $count -= 1;
            }
        }
        return $temp;
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement3($nums) {
        sort($nums);
        return $nums[floor(count($nums) / 2)];
    }
}
