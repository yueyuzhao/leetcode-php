<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSegments($s) {
        $data = explode(' ', $s);
        $count = 0;
        foreach ($data as $val) {
            if (empty($val)) {
                continue;
            }
            $count += 1;
        }
        return $count;
    }
}
