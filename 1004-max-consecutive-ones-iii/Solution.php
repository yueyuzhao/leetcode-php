<?php

class Solution {

    /**
     * @param Integer[] $A
     * @param Integer $K
     * @return Integer
     */
    function longestOnes($A, $K) {
        $size = count($A);
        if ($K >= $size) {
            return $K;
        }
    }
}
