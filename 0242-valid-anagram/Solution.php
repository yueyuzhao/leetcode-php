<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if (strlen($s) != strlen($t)) {
            return false;
        }
        $arrS = array_count_values(str_split($s));
        $arrT = array_count_values(str_split($t));
        foreach ($arrS as $char => $count) {
            if (($arrT[$char] ?? 0) != $count) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram2($s, $t) {
        $arrS = unpack('C*', $s);
        sort($arrS);
        $arrT = unpack('C*', $t);
        sort($arrT);
        return $arrS == $arrT;
    }

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram3($s, $t) {
        return count_chars($s, 1) == count_chars($t, 1);
    }
}
