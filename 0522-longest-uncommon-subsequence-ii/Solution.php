<?php

class Solution {

    /**
     * @param String[] $strs
     * @return Integer
     */
    function findLUSlength($strs) {
        $max = -1;
        $size = count($strs);
        for ($i = 0; $i < $size; $i++) {
            $str = $strs[$i];
            for ($j = strlen($str); $j > 0; $j--) {
                $sub = substr($str, 0, $j);
                $fail = false;
                foreach ($strs as $key => $str2) {
                    if ($key == $i) {
                        continue;
                    }
                    if ($this->isSub($sub, $str2)) {
                        $fail = true;
                        break;
                    }
                }
                if (!$fail) {
                    $max = max($max, $j);
                    break;
                }
            }
        }
        return $max;
    }

    function isSub($sub, $str) {
        if (false !== strpos($str, $sub)) {
            return true;
        }
        if (strlen($sub) > strlen($str)) {
            return false;
        }
        $len = strlen($sub);
        $pos = 0;
        for ($i = 0; $i < $len; $i++) {
            $char = $sub{$i};
            $pos2 = strpos($str, $char, $pos);
            if (false === $pos2) {
                return false;
            }
            if ($pos2 < $pos) {
                return false;
            }
            $pos = $pos2 + 1;
        }
        return true;
    }
}

$s = new Solution();
var_dump($s->isSub('cca', 'abcabc'));
