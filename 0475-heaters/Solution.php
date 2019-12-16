<?php

class Solution {

    /**
     * @param Integer[] $houses
     * @param Integer[] $heaters
     * @return Integer
     */
    function findRadius($houses, $heaters) {
        if (empty($houses) || empty($heaters)) {
            return 0;
        }
        // TODO: need to optimize
        $houses = array_unique($houses);
        $heaters = array_unique($heaters);
        sort($houses);
        sort($heaters);
        $houseSize = count($houses);
        $heaterSize = count($heaters);
        $max = 0;
        for ($i = 0, $j = 0; $i < $houseSize && $j < $heaterSize;) {
            $house = $houses[$i];
            $toNow = abs($house - $heaters[$j]);
            if (!isset($heaters[$j + 1])) {
                $max = max($max, $toNow);
                $i++;
                continue;
            }
            $toNext = abs($house - $heaters[$j + 1]);
            if ($toNext >= $toNow) {
                $max = max($max, $toNow);
                $i++;
                continue;
            }
            $j++;
        }
        return $max;
    }
}
