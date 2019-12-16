<?php

class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        return $word == strtolower($word)
            || $word == strtoupper($word)
            || $word == ucfirst(strtolower($word));
    }
}
