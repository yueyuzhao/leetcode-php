<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $days = count($prices);
        if ($days < 2) {
            return 0;
        }
        $profit = 0;
        $cost = false;
        for ($i=0; $i < $days; $i++) {
            $priceToday = $prices[$i];
            $priceTomorrow = isset($prices[$i + 1]) ? $prices[$i + 1] : 0;
            // 已经买了
            if (false !== $cost) {
                // 明天的价格比今天的还高，那么明天再卖
                if ($priceTomorrow <= $priceToday) {
                    // 明天的价格比今天低，先卖了再说
                    $profit += ($priceToday - $cost);
                    $cost = false;
                }
                continue;
            }
            // 明天的价格比今天的低，那么明天再买
            // 如果一样，也是明天再买，减少交易
            if ($priceTomorrow <= $priceToday) {
                continue;
            }
            $cost = $priceToday;
        }
        return $profit;
    }

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit2($prices)
    {
        $days = count($prices);
        $profit = 0;
        for ($i=1; $i < $days; $i++) {
            if ($prices[$i] > $prices[$i - 1]) {
                $profit += ($prices[$i] - $prices[$i - 1]);
            }
        }
        return $profit;
    }
}
