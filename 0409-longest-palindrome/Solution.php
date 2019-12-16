<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s) {
        $data = count_chars($s, 1);
        $length = 0;
        $long = 0;
        foreach ($data as $key => $val) {
            if ($val % 2 == 0) {
                $length += $val;
            } else {
                $length += $val - 1;
                $long = 1;
            }
        }
        return $length + $long;
    }
}
