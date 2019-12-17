<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function convertToBase7($num) {
        if ($num == 0) {
            return '0';
        }
        $res = '';
        $positive = $num >= 0;
        $num = abs($num);
        while ($num != 0) {
            $res = ($num % 7) . $res;
            $num = floor($num / 7);
        }
        if (!$positive) {
            return '-' . $res;
        }
        return $res;
    }
}
