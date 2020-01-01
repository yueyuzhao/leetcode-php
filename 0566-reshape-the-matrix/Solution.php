<?php

class Solution {

    /**
     * @param Integer[][] $nums
     * @param Integer $r
     * @param Integer $c
     * @return Integer[][]
     */
    function matrixReshape($nums, $r, $c) {
        $size = 0;
        foreach ($nums as $num) {
            $size += count($num);
        }
        if ($size != $r * $c) {
            return $nums;
        }
        $oldRow = count($nums);
        if ($oldRow == $r) {
            return $nums;
        }
        $oldCol = intval($size / $oldRow);
        $matrix = [];
        for ($i = 0; $i < $r; $i++) {
            $row = [];
            for ($j = 0; $j < $c; $j++) {
                $num = $i * $c + $j;
                $x = intval($num / $oldCol);
                $y = $num % $oldCol;
                $row[] = $nums[$x][$y];
            }
            $matrix[] = $row;
        }
        return $matrix;
    }
}
