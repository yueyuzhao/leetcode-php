<?php

class Solution {

    private $map = [
        'q' => 1,
        'w' => 1,
        'e' => 1,
        'r' => 1,
        't' => 1,
        'y' => 1,
        'u' => 1,
        'i' => 1,
        'o' => 1,
        'p' => 1,
        'a' => 2,
        's' => 2,
        'd' => 2,
        'f' => 2,
        'g' => 2,
        'h' => 2,
        'j' => 2,
        'k' => 2,
        'l' => 2,
        'z' => 3,
        'x' => 3,
        'c' => 3,
        'v' => 3,
        'b' => 3,
        'n' => 3,
        'm' => 3,
    ];

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $res = [];
        foreach($words as $word) {
            if ($this->sameRow($word)) {
                $res[] = $word;
            }
        }
        return $res;
    }

    function sameRow($word) {
        if (empty($word)) {
            return false;
        }
        $word = strtolower($word);
        $row = $this->map[$word{0}];
        for ($i = strlen($word) - 1; $i > 0; $i--) {
            if ($row != $this->map[$word{$i}]) {
                return false;
            }
        }
        return true;
    }
}
