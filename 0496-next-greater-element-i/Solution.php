<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {
        $res = [];
        $size = count($nums2);
        $data = array_flip($nums2);
        foreach ($nums1 as $num) {
            $next = -1;
            for ($i = $data[$num] + 1; $i < $size; $i++) {
                if ($nums2[$i] > $num) {
                    $next = $nums2[$i];
                    break;
                }
            }
            $res[] = $next;
        }
        return $res;
    }
}
