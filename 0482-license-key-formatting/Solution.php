<?php

class Solution {

    /**
     * @param String $S
     * @param Integer $K
     * @return String
     */
    function licenseKeyFormatting($S, $K) {
        $S = strtoupper($S);
        $res = [];
        $stash = '';
        for ($i = strlen($S) - 1; $i >= 0; $i--) {
            $char = $S{$i};
            if ($char == '-') {
                continue;
            }
            $stash = $char . $stash;
            if (strlen($stash) == $K) {
                array_unshift($res, $stash);
                $stash = '';
            }
        }
        if (!empty($stash)) {
            array_unshift($res, $stash);
        }
        return implode('-', $res);
    }

    /**
     * @param String $S
     * @param Integer $K
     * @return String
     */
    function licenseKeyFormatting2($S, $K) {
        $S = str_replace('-', '', strtoupper($S));
        $res = '';
        $c = 0;
        for ($i = strlen($S) - 1; $i >= 0; $i--) {
            if ($c >= $K) {
                $c = 0;
                $res = '-' . $res;
            }
            $char = $S{$i};
            if ($char == '-') {
                continue;
            }
            $res = $char . $res;
            $c++;
        }
        return $res;
    }

    /**
     * @param String $S
     * @param Integer $K
     * @return String
     */
    function licenseKeyFormatting3($S, $K) {
        if (empty($S)) {
            return;
        }
        $S = str_replace('-', '', strtoupper($S));
        $size = strlen($S);
        if ($size < $K) {
            return $S;
        }
        $left = $size % $K;
        $firstPart = substr($S, 0, $left);
        $restPart = substr($S, $left, $size - $left);
        $res = implode('-', str_split($restPart, $K));
        if ($left == 0) {
            return $res;
        }
        return $firstPart . '-' . $res;
    }
}
