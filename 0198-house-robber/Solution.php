<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums) {
        if (empty($nums)) {
            return 0;
        }
        if (count($nums) <= 2) {
            return max($nums);
        }
        $t1 = $nums[0] + $this->rob(array_slice($nums, 2));
        $t2 = $nums[1] + $this->rob(array_slice($nums, 3));
        return max($t1, $t2);
    }

    function rob2($nums) {
        $prevMax = 0;
        $currMax = 0;
        foreach ($nums as $num) {
            $temp = $currMax;
            $currMax = max($prevMax + $num, $currMax);
            $prevMax = $temp;
        }
        return $currMax;
    }

    function rob3($nums) {
        if (empty($nums)) return 0;
        if (count($nums) == 1) {
            return $nums[0];
        }
        $dp[0] = $nums[0];
        $dp[1] = max($nums[0], $nums[1]);

        for ($i = 2; $i < count($nums); $i++) {
            $dp[$i] = max($nums[$i] + $dp[$i - 2], $dp[$i - 1]);
        }

        return $dp[count($dp) - 1];
    }
}
