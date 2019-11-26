<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        if (count($prices) < 2) {
            return 0;
        }
        $minBuy = $prices[0];
        $maxProfit = 0;
        for ($i=1; $i < count($prices); $i++) {
            $price = $prices[$i];
            $profit = $price - $minBuy;
            if ($profit > $maxProfit) {
                $maxProfit = $profit;
                continue;
            }
            if ($price < $minBuy) {
                $minBuy = $price;
            }
        }
        return $maxProfit;
    }
}