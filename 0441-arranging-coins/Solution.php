<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $z = ceil(sqrt(2 * $n));
        while (true) {
            $coins = $this->getCoins($z);
            if ($coins <= $n) {
                return $z;
            }
            $z -= 1;
        }
    }

    function getCoins($n) {
        return $n * ($n + 1) / 2;
    }
}
