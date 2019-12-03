<?php

class Solution {

    private $results = [];

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $results = [];
        while (true) {
            if ($n == 1) {
                return true;
            }
            $sum = $this->squareSum($n);
            if (in_array($sum, $results)) {
                return false;
            }
            $results[] = $sum;
            $n = $sum;
        }
    }

    function squareSum($n) {
        $sum = 0;
        while ($n > 0) {
            $sum += pow($n % 10, 2);
            $n = floor($n / 10);
        }
        return $sum;
    }
}
