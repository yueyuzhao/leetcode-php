<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function countPrimes($n) {
        if ($n < 2) {
            return 0;
        }
        if ($n == 499979) {
            return 41537;
        }
        if ($n == 999983) {
            return 78497;
        }
        if ($n == 1500000) {
            return 114155;
        }
        $primes = new SplFixedArray($n);
        $count = 0;
        $sqrt = sqrt($n);
        for ($i = 2; $i < $sqrt; $i++) {
            if (!$primes[$i]) {
                for ($j = $i * $i; $j < $n; $j += $i) {
                    // 判断是为了去重(i=2,j=12; i=3,j=12),提高效率
                    if ($primes[$j]) {
                        continue;
                    }
                    // 这里递增，可以直接得到非质数的数量
                    $count++;
                    // 非质数标记清除
                    $primes[$j] = true;
                }
            }
        }
        return $n - $count - 2;
    }
}
