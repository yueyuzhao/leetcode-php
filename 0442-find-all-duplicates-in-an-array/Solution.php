<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDuplicates($nums) {
        $res = [];
        $size = count($nums);
        $data = new SplFixedArray($size);
        for ($i = 1; $i <= $size;$i++) {
            $n = $nums[$i - 1];
            if ($data[$n - 1]) {
                $res[] = $n;
            } else {
                $data[$n - 1] = 1;
            }
        }
        return $res;
    }
}
