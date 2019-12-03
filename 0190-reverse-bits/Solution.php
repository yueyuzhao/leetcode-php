<?php

class Solution
{
    // you need treat n as an unsigned value
    public function reverseBits($n) {
        $res = 0;
        for ($i = 0; $i < 32; $i++) {
            $res <<= 1;
            $res += $n & 1;
            $n >>= 1;
        }
        return $res;
    }
}
