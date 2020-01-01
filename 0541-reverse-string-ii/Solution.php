<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k) {
        $parts = str_split($s, $k);
        $size = count($parts);
        for ($i = 0; $i < $size; $i++) {
            if ($i % 2 != 0) {
                continue;
            }
            $parts[$i] = strrev($parts[$i]);
        }
        return join('', $parts);
    }
}
