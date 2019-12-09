<?php

class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $mArr = count_chars($magazine, 1);
        $size = strlen($ransomNote);
        for ($i = 0; $i < $size; $i++) {
            $key = ord($ransomNote{$i});
            if (isset($mArr[$key]) && $mArr[$key] > 0) {
                $mArr[$key] -= 1;
                continue;
            }
            return false;
        }
        return true;
    }
}
