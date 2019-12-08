<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function canWinNim($n) {
        if ($n <= 0) {
            return false;
        }
        return $n % 4 != 0;
    }
}
