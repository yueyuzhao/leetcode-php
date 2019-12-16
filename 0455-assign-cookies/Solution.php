<?php

class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        sort($g);
        sort($s);
        $sizeG = count($g);
        $sizeS = count($s);

        $i = 0;
        $j = 0;
        while ($i < $sizeG && $j < $sizeS) {
            if ($s[$j] < $g[$i]) {
                $j++;
                continue;
            }
            $j++;
            $i++;
        }
        return $i;
    }
}

$s = new Solution();
echo $s->findContentChildren([1, 2, 3], [1, 2, 4]);
