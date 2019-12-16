<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement($num) {
        $str = decbin($num);
        $size = strlen($str);
        for ($i = 0; $i < $size; $i++) {
            if ($str{$i} == '0') {
                $str{$i} = 1;
            } else {
                $str{$i} = 0;
            }
        }
        return bindec(ltrim($str, 0));
    }

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement2($num) {
        return bindec(str_repeat('1', strlen(decbin($num)))) - $num;
    }

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement3($num) {
        return pow(2, strlen(decbin($num))) - 1 - $num;
    }

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement4($num) {
        return pow(2, floor(log($num, 2)) + 1) - 1 - $num;
    }
}
