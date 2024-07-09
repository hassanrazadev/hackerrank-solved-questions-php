<?php

/*
 * https://www.hackerrank.com/challenges/divisible-sum-pairs/problem?isFullScreen=true
 * Complete the 'divisibleSumPairs' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER k
 *  3. INTEGER_ARRAY ar
 */

function divisibleSumPairs($n, $k, $ar) {
    // Write your code here
    $pairs = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if (($ar[$i] + $ar[$j]) % $k == 0) {
                $pairs ++;
            }
        }
    }
    return $pairs;
}