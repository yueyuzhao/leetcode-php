<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function findRelativeRanks($nums) {
        $data = $nums;
        rsort($data);
        $data = array_flip($data);
        $res = [];
        foreach ($nums as $val) {
            $res[] = $this->getRank($data[$val]);
        }
        return $res;
    }

    function getRank($i) {
        switch ($i) {
            case 0:
                return 'Gold Medal';
            case 1:
                return 'Silver Medal';
            case 2:
                return 'Bronze Medal';
            default:
                return strval($i + 1);
        }
    }
}
