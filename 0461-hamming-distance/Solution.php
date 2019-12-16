<?php

class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance($x, $y) {
        $num = decbin($x ^ $y);
        $num = str_replace('0', '', $num);
        return strlen($num);
    }

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance2($x, $y) {
        $num = $x ^ $y;
        $distance = 0;
        while ($num > 0) {
            if ($num & 1 == 1) {
                $distance += 1;
            }
            $num >>= 1;
        }
        return $distance;
    }

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance3($x, $y) {
        $data = array_count_values(str_split(decbin($x ^ $y)));
        return $data[1] ?? 0;
    }
}
