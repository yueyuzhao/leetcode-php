<?php

class Solution {


    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        $size = count($nums);
        $max = [PHP_INT_MIN, PHP_INT_MIN, PHP_INT_MIN];
        for ($i = 0; $i < $size; $i++) {
            $val = $nums[$i];
            if ($val < $max[0]) {
                continue;
            }
            if (in_array($val, $max)) {
                continue;
            }
            if ($val > $max[2]) {
                $max[0] = $max[1];
                $max[1] = $max[2];
                $max[2] = $val;
                continue;
            } else if ($val > $max[1]) {
                $max[0] = $max[1];
                $max[1] = $val;
            } else if ($val > $max[0]) {
                $max[0] = $val;
            }
        }
        return $max[0] == PHP_INT_MIN ? $max[2] : $max[0];
    }

    function thirdMax2($nums) {
        $data = array_unique($nums);
        rsort($data);
        return count($data) < 3 ? $data[0] : $data[2];
    }
}
