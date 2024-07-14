<?php
/*
 * https://www.hackerrank.com/challenges/the-hurdle-race/problem?isFullScreen=true
 *
 * Complete the 'hurdleRace' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY height
 */

function hurdleRace($k, $height) {
    $maxHeight = 0;
    foreach ($height as $value) {
        if ($value > $maxHeight) {
            $maxHeight = $value;
        }
    }

    return $maxHeight > $k ? $maxHeight - $k : 0;
}