<?php

class Solution {

    private $data = [1,3,9,27,81,243,729,2187,6561,19683,59049,177147,531441, 1594323, 4782969, 14348907, 43046721, 129140163, 387420489, 1162261467];

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        if ($n <= 0) {
            return false;
        }
        while ($n > 1) {
            if ($n % 3 != 0) {
                return false;
            }
            $n /= 3;
        }
        return true;
    }

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree2($n) {
        return $n > 0 && 1162261467 % $n == 0;
    }

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree3($n) {
        return in_array($n, $this->data);
    }

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree4($n) {
        return $n > 0 && pow(3, round(log($n, 3))) == $n;
    }
}
