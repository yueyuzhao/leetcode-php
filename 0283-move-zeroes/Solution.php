<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $zeroCount = 0;
        for ($i = 0; $i < count($nums);) {
            if ($nums[$i] == 0) {
                $zeroCount += 1;
                array_splice($nums, $i, 1);
            } else {
                $i++;
            }
        }
        for ($i = 0; $i < $zeroCount; $i++) {
            $nums[] = 0;
        }
    }

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes2(&$nums) {
        $size = count($nums);
        $k = 0;
        $data = new SplFixedArray($size);
        for ($i = 0; $i < $size; $i++) {
            if ($nums[$i] != 0) {
                $data[$k] = $nums[$i];
                $k += 1;
            }
        }
        for ($i = 0; $i < $size; $i++) {
            $nums[$i] = $data[$i] ?? 0;
        }
    }

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes3(&$nums) {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] === 0) {
                unset($nums[$i]);
                array_push($nums, 0);
            }
        }
    }
}
