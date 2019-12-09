<?php

class GuessGame {
    private $num;

    function __construct($pick) {
        $this->num = $pick;
    }

    protected function guess($num) {
        if ($num == $this->num) {
            return 0;
        }
        return $num < $this->num ? 1 : -1;
    }
}
