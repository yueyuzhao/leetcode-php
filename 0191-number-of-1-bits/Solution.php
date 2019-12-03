<?php

class Solution {
    // you need to treat n as an unsigned value
    public function hammingWeight($n) {
        $c = 0;
        while ($n > 0) {
            if ($n & 1 == 1) {
                $c += 1;
            }
            $n >>= 1;
        }
        return $c;
    }
}
