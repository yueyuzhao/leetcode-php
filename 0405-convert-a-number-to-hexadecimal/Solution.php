<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function toHex($num) {
        if ($num == 0) {
            return '0';
        }
        $hexes = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f'];
        $res = '';
        if ($num < 0) {
            $num = pow(2, 32) + $num;
        }
        while ($num != 0) {
            $res = $hexes[$num % 16] . $res;
            $num = floor($num / 16);
        }
        return $res;
    }
}
