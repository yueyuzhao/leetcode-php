<?php

class Solution {

    /**
     * @param Integer $N
     * @return Integer
     */
    function fib($N) {
        if ($N == 1) {
            return 1;
        }
        if ($N == 0) {
            return 0;
        }
        return $this->fib($N - 1) + $this->fib($N - 2);
    }

    function fib2($N) {
        $data = [
            0,
            1,
        ];
        for ($i = 2; $i <= $N; $i++) {
            $data[$i] = $data[$i - 1] + $data[$i - 2];
        }
        return $data[$N];
    }
}
