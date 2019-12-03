<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        if ($n <= 0) {
            return false;
        }
        while ($n > 2) {
            if ($n % 2 == 1) {
                return false;
            }
            $n >>= 1;
        }
        return true;
    }

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo2($n) {
        if($n < 1) {
            return false;
        }
        return (($n & ($n - 1)) == 0);
    }
}
