<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $c = 0;
        foreach($nums as $num) {
            $c = $c ^ $num;
        }
        return $c;
    }
}
