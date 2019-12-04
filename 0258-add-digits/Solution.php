<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        $sum = 0;
        while ($num > 0) {
            $sum += $num % 10;
            $num = floor($num / 10);
            if ($num == 0) {
                if ($sum < 10) {
                    break;
                }
                $num = $sum;
                $sum = 0;
            }
        }
        return $sum;
    }

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits2($num) {
        do {
            $num = array_sum(str_split($num));
        } while ($num >= 10);
        return $num;
    }

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits3($num) {
        do {
            $num = floor($num / 10 + $num % 10);
        } while ($num >= 10);
        return $num;
    }

    function addDigits4($num) {
        return ($num - 1) % 9 + 1;
    }
}
