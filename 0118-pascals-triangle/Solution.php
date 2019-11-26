<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        if ($numRows <= 0) {
            return [];
        }
        $rows = [
            [1],
        ];
        for ($i=1; $i < $numRows; $i++) {
            $lastRow = $rows[$i - 1];
            $row = [1];
            for ($j=0; $j < count($lastRow) - 1; $j++) {
                $row[] = $lastRow[$j] + $lastRow[$j + 1];
            }
            $row[] = 1;
            $rows[] = $row;
        }
        return $rows;
    }
}
