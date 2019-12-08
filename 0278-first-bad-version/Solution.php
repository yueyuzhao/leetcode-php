<?php

require_once './VersionControl.php';

/* The isBadVersion API is defined in the parent class VersionControl.
      boolean isBadVersion(int version); */

class Solution extends VersionControl {

    public function firstBadVersion($n) {
        $left = 1;
        $right = $n;
        while ($left < $right) {
            $mid = floor($left + ($right - $left) / 2);
            if ($this->isBadVersion($mid)) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }
        return $left;
    }
}
