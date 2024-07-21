<?php
/*
 * https://www.hackerrank.com/challenges/save-the-prisoner/problem?isFullScreen=true
 *
 * Complete the 'saveThePrisoner' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER m
 *  3. INTEGER s
 */

function saveThePrisoner($n, $m, $s) {
    $remainingCandies = $m % $n;
    if ($remainingCandies == 0) {
        return ($s - 1 == 0) ? $n : $s - 1;
    } else {
        $finalPosition  = $s + $remainingCandies - 1;
        return ($finalPosition  > $n) ? $finalPosition  - $n : $finalPosition ;
    }
}

print_r(saveThePrisoner(7, 19, 2));