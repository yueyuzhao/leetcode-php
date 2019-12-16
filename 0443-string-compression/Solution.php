<?php

class Solution {

    /**
     * @param String[] $chars
     * @return Integer
     */
    function compress(&$chars) {
        if (empty($chars)) {
            return 0;
        }
        $char = $chars[0];
        $count = 1;
        $size = count($chars);
        $j = 1;
        for ($i = 1; $i <= $size; $i++) {
            $c = null;
            if ($i < $size) {
                $c = $chars[$i];
                unset($chars[$i]);
                if ($c == $char) {
                    $count += 1;
                    continue;
                }
            }
            if ($count > 1) {
                // add count to array
                $arr = str_split($count);
                while (count($arr) > 0) {
                    $chars[$j++] = array_shift($arr);
                }
                $count = 1;
            }
            if ($i < $size) {
                $char = $chars[$j++] = $c;
            }
        }
        return $j;
    }
}
