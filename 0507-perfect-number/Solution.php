<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function checkPerfectNumber($num) {
        if ($num <= 1) {
            return false;
        }
        $sum = 1;
        $top = floor(sqrt($num));
        for ($i = 2; $i <= $top; $i++) {
            if ($num % $i != 0) {
                continue;
            }
            $sum += $i;
            $sum += ($num / $i);
        }
        return $sum == $num;
    }
}
