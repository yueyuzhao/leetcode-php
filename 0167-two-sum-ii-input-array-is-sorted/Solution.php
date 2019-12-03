<?php

class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $count = count($numbers);
        $j = 0;
        for ($i = $count - 1; $i > 0; $i--) {
            $val = $numbers[$i];
            $left = $target - $val;
            for (; $j < $i; $j++) {
                if ($left < $numbers[$j]) {
                    break;
                }
                if ($numbers[$j] == $left) {
                    // indexes are not zero based
                    return [$j + 1, $i + 1];
                }
            }
        }
        return [];
    }
}
