<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        if ($k <= 0 || empty($nums)) {
            return;
        }
        $length = count($nums);
        $k = $k % $length;
        while ($k > 0) {
            $tmp = array_pop($nums);
            array_unshift($nums, $tmp);
            $k--;
        }
    }

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate2(&$nums, $k) {
        if ($k <= 0 || empty($nums)) {
            return;
        }
        $length = count($nums);
        $k = $k % $length;
        $temps = array_splice($nums, $length - $k, $k);
        array_unshift($nums, ...$temps);
    }

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate3(&$nums, $k) {
        if ($k <= 0 || empty($nums)) {
            return;
        }
        $length = count($nums);
        $k = $k % $length;
        $nums = array_slice(array_merge($nums, $nums), $length - $k, $length);
    }
}
