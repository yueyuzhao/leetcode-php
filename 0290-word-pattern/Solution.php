<?php

class Solution {

    /**
     * @param String $pattern
     * @param String $str
     * @return Boolean
     */
    function wordPattern($pattern, $str) {
        $size = strlen($pattern);
        $strArr = explode(' ', $str);
        if (count($strArr) != $size) {
            return false;
        }
        $mapper = [];
        $wordStack = [];
        foreach ($strArr as $i => $val) {
            $char = $pattern{$i};
            if (!isset($mapper[$char])) {
                $word = $strArr[$i];
                if (in_array($word, $wordStack)) {
                    return false;
                }
                $wordStack[] = $word;
                $mapper[$char] = $word;
            } else if ($mapper[$char] != $strArr[$i]) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param String $pattern
     * @param String $str
     * @return Boolean
     */
    function wordPattern2($pattern, $str) {
        $size = strlen($pattern);
        $strArr = explode(' ', $str);
        if (count($strArr) != $size) {
            return false;
        }
        $mapper = [];
        foreach ($strArr as $i => $val) {
            $char = $pattern{$i};
            if (!isset($mapper[$char])) {
                $word = $strArr[$i];
                if (in_array($word, array_values($mapper))) {
                    return false;
                }
                $mapper[$char] = $word;
            } else if ($mapper[$char] != $strArr[$i]) {
                return false;
            }
        }
        return true;
    }
}
