<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        $i = 1;
        while (true) {
            $square = $i * $i;
            if ($square == $num) {
                return true;
            }
            if ($square < $num) {
                $i += 1;
                continue;
            }
            break;
        }
        return false;
    }
}
