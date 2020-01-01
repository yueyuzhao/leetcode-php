<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s) {
        if (false !== strpos($s, 'LLL')) {
            return false;
        }
        $firstA = strpos($s, 'A');
        if (false !== $firstA) {
            if (false !== strpos($s, 'A', $firstA + 1)) {
                return false;
            }
        }
        return true;
    }
}
