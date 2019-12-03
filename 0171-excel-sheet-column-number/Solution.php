<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function titleToNumber($s) {
        $num = 0;
        $length = strlen($s);
        for ($i = $length - 1, $j = 0; $i >= 0; $i--, $j++) {
            $num += ($this->charToNum($s{$i}) * pow(26, $j));
        }
        return $num;
    }

    private function charToNum($char) {
        return ord($char) - 64;
    }

    /**
     * @param String $s
     * @return Integer
     */
    function titleToNumber2($s) {
        $map = [
            'A' => 1,
            'B' => 2,
            'C' => 3,
            'D' => 4,
            'E' => 5,
            'F' => 6,
            'G' => 7,
            'H' => 8,
            'I' => 9,
            'J' => 10,
            'K' => 11,
            'L' => 12,
            'M' => 13,
            'N' => 14,
            'O' => 15,
            'P' => 16,
            'Q' => 17,
            'R' => 18,
            'S' => 19,
            'T' => 20,
            'U' => 21,
            'V' => 22,
            'W' => 23,
            'X' => 24,
            'Y' => 25,
            'Z' => 26,
        ];
        $ss = strrev($s);
        $len = strlen($s);
        $r = 0;
        for($i = $len; $i> 0; $i--) {
            $n = $i - 1;
            $key = $ss[$n];
            $mapVal = $map[$key];
            $r += $mapVal * pow(26, $n);
        }
        return $r;
    }
}
