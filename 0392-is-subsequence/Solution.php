<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $size = strlen($s);
        $pos = 0;
        for ($i = 0; $i < $size; $i++) {
            $char = $s{$i};
            $newPos = strpos($t, $char, $pos);
            if (false === $newPos) {
                return false;
            }
            if ($newPos < $pos) {
                return false;
            }
            $pos = $newPos + 1;
        }
        return true;
    }
}
