<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $size = strlen($s);
        $chars = [];
        for ($i = 0; $i < $size; $i++) {
            $char = $s{$i};
            if (in_array($char, $chars)) {
                continue;
            }
            if (false === strpos($s, $char, $i + 1)) {
                return $i;
            }
            $chars[] = $char;
        }
        return -1;
    }
}
