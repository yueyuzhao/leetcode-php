<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $data = array_count_values($nums);
        arsort($data);
        $res = [];
        $i = 0;
        foreach ($data as $key => $val) {
            if ($i < $k) {
                $res[] = $key;
                $i++;
            }
            if ($i == $k) {
                return $res;
            }
        }
    }
}
