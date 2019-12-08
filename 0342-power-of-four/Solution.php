<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPowerOfFour($num) {
        return $num > 0 && pow(4, round(log($num, 4))) == $num;
    }

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPowerOfFour2($num) {
        $str = decbin($num);
        $length = strlen($str);
        if (($length - 1) % 2 != 0) {
            return false;
        }
        return $str == ('1' . str_repeat('0', $length - 1));
    }

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPowerOfFour3($num) {
        if ($num < 1) {
            return false;
        }
        if (($num & ($num - 1)) != 0) {
            return false;
        }
        return ($num & 0x55555555) == $num;
    }

    private $data = [];

    function __construct() {
        foreach (range(0, 32, 2) as $step) {
            $this->data[] = 1 << $step;
        }
    }

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPowerOfFour4($num) {
        return in_array($num, $this->data);
    }
}
