<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function repeatedSubstringPattern($s) {
        $length = strlen($s);
        for ($i = 1; $i <= $length / 2; $i++) {
            $sub = substr($s, 0, $i);
            if (str_repeat($sub, $length / $i) == $s) {
                return true;
            }
        }
        return false;
    }
}
