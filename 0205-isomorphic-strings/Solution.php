<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $length = strlen($t);
        $orderS = [];
        $orderT = [];
        for ($i = 0; $i < $length; $i++) {
            $charS = $s{$i};
            $charT = $t{$i};
            if (!isset($orderS[$charS])) {
                $orderS[$charS] = $i;
            }
            if (!isset($orderT[$charT])) {
                $orderT[$charT] = $i;
            }
            if ($orderS[$charS] != $orderT[$charT]) {
                return false;
            }
        }
        return true;
    }
}
