<?php

class Solution {

    /**
     * @param String $secret
     * @param String $guess
     * @return String
     */
    function getHint($secret, $guess) {
        $size = strlen($secret);
        $bulls = 0;
        for ($i = 0; $i < $size; $i++) {
            $charG = $guess{$i};
            $charS = $secret{$i};
            if ($charG == $charS) {
                $bulls++;
                $secret{$i} = '_';
                $guess{$i} = '_';
                continue;
            } else if(false === strpos($secret, $charG)) {
                $guess{$i} = '_';
            }
        }
        $mSecret = count_chars($secret, 1);
        $cows = 0;
        for ($i = 0; $i < $size; $i++) {
            $char = $guess{$i};
            if ($char == '_') {
                continue;
            }
            $key = ord($char);
            if (isset($mSecret[$key]) && $mSecret[$key] > 0) {
                $mSecret[$key] -= 1;
                $cows++;
            }
        }
        return "{$bulls}A{$cows}B";
    }
}
