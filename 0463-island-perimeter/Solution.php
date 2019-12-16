<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function islandPerimeter($grid) {
        $count = 0;
        for ($i = 0; $i < count($grid); $i++) {
            $row = $grid[$i];
            for ($j = 0; $j < count($row); $j++) {
                $num = $grid[$i][$j];
                if ($num == 0) {
                    continue;
                }
                // 查看周围有没有1
                $p = 4;
                if (isset($grid[$i - 1][$j]) && $grid[$i - 1][$j] == 1) {
                    $p -= 1;
                }
                if (isset($grid[$i][$j - 1]) && $grid[$i][$j - 1] == 1) {
                    $p -= 1;
                }
                if (isset($grid[$i + 1][$j]) && $grid[$i + 1][$j] == 1) {
                    $p -= 1;
                }
                if (isset($grid[$i][$j + 1]) && $grid[$i][$j + 1] == 1) {
                    $p -= 1;
                }
                $count += $p;
            }
        }
        return $count;
    }
}
