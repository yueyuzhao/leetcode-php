<?php

require_once './GuessGame.php';

/* The guess API is defined in the parent class GuessGame.
   @param num, your guess
   @return -1 if my number is lower, 1 if my number is higher, otherwise return 0
      int guess(int num); */

class Solution extends GuessGame {
    public function guessNumber($n) {
        $low = 0;
        $high = $n;
        while (true) {
            $mid = $low + floor(($high - $low) / 2);
            $res = $this->guess($mid);
            if ($res == 0) {
                return $mid;
            } else if ($res < 0) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }
    }
}
