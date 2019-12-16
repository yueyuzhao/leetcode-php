<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $res = [];
        for ($i = 1; $i <= $n; $i++) {
            $str = '';
            if ($i % 3 == 0) {
                $str .= 'Fizz';
            }
            if ($i % 5 == 0) {
                $str .= 'Buzz';
            }
            if (empty($str)) {
                $str = strval($i);
            }
            $res[] = $str;
        }
        return $res;
    }
}
