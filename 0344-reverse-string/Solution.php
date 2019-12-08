<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $size = count($s);
        for ($i = 0; $i < $size / 2; $i++) {
            $tmp = $s[$i];
            $s[$i] = $s[$size - $i - 1];
            $s[$size - $i - 1] = $tmp;
        }
    }
}
