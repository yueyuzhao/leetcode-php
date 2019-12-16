<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        sort($nums1);
        sort($nums2);

        $res = [];
        $i = 0;
        $sizeA = count($nums1);
        $sizeB = count($nums2);
        for ($j = 0; $j < $sizeB; $j++) {
            $num = $nums2[$j];
            if ($num < $nums1[$i]) {
                continue;
            }
            if ($num > $nums1[$sizeA - 1]) {
                break;
            }
            for ($k = $i; $k < $sizeA; $k++) {
                if ($num == $nums1[$k]) {
                    $res[] = $num;
                    $i = $k + 1;
                    break;
                }
            }
            if ($i >= $sizeA) {
                break;
            }
        }
        return $res;
    }
}
