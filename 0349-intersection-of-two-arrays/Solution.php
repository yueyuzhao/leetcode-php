<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $data = [];
        if (empty($nums1) || empty($nums2)) {
            return $data;
        }
        foreach ($nums1 as $num) {
            if (in_array($num, $nums2)
                && !in_array($num, $data)
            ) {
                $data[] = $num;
            }
        }
        return $data;
    }
}
