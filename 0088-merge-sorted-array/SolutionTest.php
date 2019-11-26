<?php

require('./Solution.php');

$s = new Solution();

$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;

$s->merge($nums1, $m, $nums2, $n);
var_dump($nums1);

$nums1