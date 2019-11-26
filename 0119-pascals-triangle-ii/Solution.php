<?php

class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[][]
     */
    function generate($rowIndex) {
        if ($rowIndex < 0) {
            return [];
        }
        $lastRow = [1];
        for ($i=0; $i < $rowIndex; $i++) {
            $row = [1];
            for ($j=0; $j < count($lastRow) - 1; $j++) {
                $row[] = $lastRow[$j] + $lastRow[$j + 1];
            }
            $row[] = 1;
            $lastRow = $row;
        }
        return $lastRow;
    }
}
