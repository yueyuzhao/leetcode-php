<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $size = strlen($s);
        for ($i = 0; $i < $size; $i++) {
            $char = $s{$i};
            $pos = strpos($t, $char);
            if (false === $pos) {
                continue;
            }
            $t = substr_replace($t, '', $pos, 1);
        }
        return $t;
    }
}
