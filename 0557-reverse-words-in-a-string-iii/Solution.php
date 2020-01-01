<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $data = explode(" ", $s);
        for ($i = count($data) - 1; $i >= 0; $i--) {
            $data[$i] = strrev($data[$i]);
        }
        return implode(" ", $data);
    }
}
