<?php

/*
 * https://www.hackerrank.com/challenges/strange-advertising/problem?isFullScreen=true
 *
 * Complete the 'viralAdvertising' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function viralAdvertising($n) {
    $likedBy = 2;
    $cumulative = 2;

    for ($i = 2; $i <= $n; $i++) {
        $sharedWith = $likedBy * 3;
        $likedBy = floor($sharedWith / 2);
        $cumulative = $cumulative + $likedBy;
    }

    return $cumulative;
}