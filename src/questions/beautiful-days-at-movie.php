<?php

/*
 * https://www.hackerrank.com/challenges/beautiful-days-at-the-movies/problem?isFullScreen=true
 *
 * Complete the 'beautifulDays' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER i
 *  2. INTEGER j
 *  3. INTEGER k
 */

function beautifulDays($i, $j, $k) {
    // Write your code here
    $beautifulDays = 0;
    for ($l = $i; $l < $j; $l++) {
        $revers = strrev(strval($l));
        $diff = $l - $revers;
        if ($diff % $k === 0) {
            $beautifulDays ++;
        }
    }

    return $beautifulDays;
}
