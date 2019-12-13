<?php

class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2) {
        $num1 = str_split($num1);
        $num2 = str_split($num2);
        $res = '';
        $tmp = 0;
        while (count($num1) > 0 || count($num2) > 0) {
            $valA = array_pop($num1);
            $valB = array_pop($num2);
            $sum = $valA + $valB + $tmp;
            if ($sum > 9) {
                $res = ($sum - 10) . $res;
                $tmp = 1;
            } else {
                $res = $sum . $res;
                $tmp = 0;
            }
        }
        if ($tmp > 0) {
            $res = $tmp . $res;
        }
        return $res;
    }
}
