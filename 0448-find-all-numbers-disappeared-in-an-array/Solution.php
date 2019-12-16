<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $size = count($nums);
        $res = [];
        for ($i = 1; $i <= $size;) {
            $n = $nums[$i - 1];
            if ($nums[$n - 1] != $n) {
                $nums[$i - 1] = $nums[$n - 1];
                $nums[$n - 1] = $n;
                continue;
            }
            $i++;
        }
        for ($i = 0; $i < $size; $i++) {
            $n = $nums[$i];
            if ($n != $i + 1) {
                $res[] = $i + 1;
            }
        }
        return $res;
    }

    function findDisappearedNumbers2($nums) {
        $size = count($nums);
        $data = new SplFixedArray($size);
        for ($i = 1; $i <= $size;$i++) {
            $n = $nums[$i - 1];
            $data[$n - 1] = $n;
        }
        $res = [];
        for ($i = 0; $i < $size; $i++) {
            if ($data[$i] != $i + 1) {
                $res[] = $i + 1;
            }
        }
        return $res;
    }
}
