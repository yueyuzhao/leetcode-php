<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function trailingZeroes($n) {
        $count = 0;
        while ($n > 0) {
            $n = floor($n / 5);
            $count += $n;
        }
        return $count;
    }
}
