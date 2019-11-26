<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        if (!$s) {
            return true;
        }
        $s = strtolower($s);
        $mid = floor(strlen($s) / 2);
        $j = strlen($s) - 1;
        $i = 0;
        do {
            $left = $s{$i};
            if (!$this->isAlphaNumeric($left)) {
                $i++;
                continue;
            }
            $right = $s{$j};
            if (!$this->isAlphaNumeric($right)) {
                $j--;
                continue;
            }
            if ($left != $right) {
                return false;
            }
            $i++;
            $j--;
        } while ($i <= $mid);
        return true;
    }

    function isAlphaNumeric($v)
    {
        $d = ord($v);
        return ($d >= 48 && $d <= 57) || ($d >= 97 && $d <= 122);
    }
}
