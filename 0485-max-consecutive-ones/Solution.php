<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        return strlen(max(explode('0', implode('', $nums))));
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes2($nums) {
        $res = 0;

        $nums[] = 0;
        $tmp = 0;
        foreach ($nums as $num) {
            if ($num == 1) {
                $tmp += 1;
                continue;
            }
            $res = max($res, $tmp);
            $tmp = 0;
        }
        return $res;
    }
}
