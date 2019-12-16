<?php

class Solution {

    /**
     * @param Integer $num
     * @return String[]
     */
    function readBinaryWatch($num) {
        $res = [];
        for ($i = 0; $i <= $num; $i++) {
            $j = $num - $i;
            $hours = $this->getHours($i);
            $minutes = $this->getMinutes($j);
            foreach ($hours as $hour) {
                foreach ($minutes as $minute) {
                    $res[] = sprintf("%d:%02d", $hour, $minute);
                }
            }
        }
        return $res;
    }

    function getHours($num) {
        switch ($num) {
            case 0:
                return [0];
            case 1:
                return [1, 2, 4, 8];
            case 2:
                return [3, 5, 6, 9, 10];
            case 3:
                return [7, 11];
            default:
                return [];
        }
    }

    function getMinutes($num) {
        switch ($num) {
            case 0:
                return [0];
            case 1:
                return [1, 2, 4, 8, 16, 32];
            case 2:
                return [3, 5, 6, 9, 10, 12, 17, 18, 20, 24, 33, 34, 36, 40, 48];
            case 3:
                return [7, 11, 13, 14, 19, 21, 22, 25, 26, 28, 35, 37, 38, 41, 42, 44, 49, 50, 52, 56];
            case 4:
                return [15, 23, 27, 29, 30, 39, 43, 45, 46, 51, 53, 54, 57, 58];
            case 5:
                return [31, 47, 55, 59];
            default:
                return [];
        }
    }
}
