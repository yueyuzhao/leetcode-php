<?php

class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function numberOfBoomerangs($points) {
        $count = 0;
        $size = count($points);
        for ($i = 0; $i < $size; $i++) {
            $p1 = $points[$i];
            $data = [];
            for ($j = 0; $j < $size; $j++) {
                if ($i == $j) {
                    continue;
                }
                $p2 = $points[$j];
                $distance = pow($p1[0] - $p2[0], 2) + pow($p1[1] - $p2[1], 2);
                if (!isset($data[$distance])) {
                    $data[$distance] = 0;
                }
                $data[$distance] += 1;
            }
            foreach ($data as $d) {
                $count += ($d * ($d - 1));
            }
        }
        return $count;
    }
}
