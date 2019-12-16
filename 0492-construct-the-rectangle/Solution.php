<?php

class Solution {

    /**
     * @param Integer $area
     * @return Integer[]
     */
    function constructRectangle($area) {
        $w = 1;
        for ($l = floor(sqrt($area)); $l <= $area; $l++) {
            if ($area % $l == 0) {
                $w = $area / $l;
                break;
            }
        }
        return $l < $w ? [$w, $l] : [$l, $w];
    }

    /**
     * @param Integer $area
     * @return Integer[]
     */
    function constructRectangle2($area) {
        for ($w = floor(sqrt($area)); $w >= 1; $w--) {
            if ($area % $w == 0) {
                return [$area / $w, $w];
            }
        }
    }
}
