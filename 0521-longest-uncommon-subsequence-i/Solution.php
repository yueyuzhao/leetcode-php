<?php

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return Integer
     */
    function findLUSlength($a, $b) {
        $strA = strlen($a) >= strlen($b) ? $a : $b;
        $strB = strlen($a) >= strlen($b) ? $b : $a;
        for ($i = strlen($strA); $i > 0; $i--) {
            $sub = substr($strA, 0, $i);
            if (false === strpos($strB, $sub)) {
                return $i;
            }
        }
        return -1;
    }
}
