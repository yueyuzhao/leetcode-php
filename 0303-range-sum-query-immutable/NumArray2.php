<?php

class NumArray2 {
    private $sums = [];

    /**
     * @param Integer[] $nums
     */
    function __construct($nums) {
        $this->sums = [0];
        $size = count($nums);
        for($i = 0; $i < $size; $i++) {
            $this->sums[$i+1] = $this->sums[$i] + $nums[$i];
        }
    }

    /**
     * @param Integer $i
     * @param Integer $j
     * @return Integer
     */
    function sumRange($i, $j) {
        return $this->sums[$j+1] - $this->sums[$i];
    }
}
