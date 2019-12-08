<?php

class VersionControl {

    private $firstBadVersion;

    function __construct($firstBadVersion)
    {
        $this->firstBadVersion = $firstBadVersion;
    }

    public function isBadVersion($n) {
        return $n >= $this->firstBadVersion;
    }
}
