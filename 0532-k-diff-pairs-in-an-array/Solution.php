<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findPairs($nums, $k) {
        sort($nums);
        $size = count($nums);
        $data = [];
        for ($i = 0; $i < $size; $i++) {
            $numA = $nums[$i];
            for ($j = $i + 1; $j < $size; $j++) {
                $numB = $nums[$j];
                if ($numB - $numA == $k) {
                    $key = "$numA,$numB";
                    if(isset($data[$key])) {
                        continue;
                    }
                    $data[$key] = 1;
                } else if ($numB - $numA > $k) {
                    break;
                }
            }
        }
        return count($data);
    }
}
