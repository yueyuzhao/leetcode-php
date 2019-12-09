<?php

class Solution {

    private $vowels = [
        'a', 'e', 'i', 'o', 'u',
        'A', 'E', 'I', 'O', 'U',
    ];

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $length = strlen($s);
        $left = 0;
        $right = $length - 1;
        while ($left < $right) {
            while (!$this->isVowel($s{$left}) && $left < $right) {
                $left += 1;
            }
            while (!$this->isVowel($s{$right}) && $left < $right) {
                $right -= 1;
            }
            $tmp = $s{$left};
            $s{$left} = $s{$right};
            $s{$right} = $tmp;
            $left += 1;
            $right -= 1;
        }
        return $s;
    }

    private function isVowel($char) {
        return in_array($char, $this->vowels);
    }
}
