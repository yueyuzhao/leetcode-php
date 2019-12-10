<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function frequencySort($s) {
        $data = count_chars($s, 1);
        arsort($data);
        $res = '';
        foreach ($data as $key => $val) {
            $res .= str_repeat(chr($key), $val);
        }
        return $res;
    }
}
