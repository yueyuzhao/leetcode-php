<?php

class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function convertToTitle($n) {
        $res = '';
        do {
            $t = ($n - 1) % 26;
            $res = $this->numToAlpha($t) . $res;
            $n = ($n - $t) / 26;
        } while ($n - 1 > 0);
        return $res;
    }

    private function numToAlpha($n) {
        return chr($n + 65);
    }
}
