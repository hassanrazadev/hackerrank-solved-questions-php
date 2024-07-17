<?php
/*
 * https://www.hackerrank.com/challenges/utopian-tree/problem?isFullScreen=true
 *
 * Complete the 'utopianTree' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function utopianTree($n) {
    $height = 1;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $height++;
        } else {
            $height = $height * 2;
        }
    }

    return $height;
}