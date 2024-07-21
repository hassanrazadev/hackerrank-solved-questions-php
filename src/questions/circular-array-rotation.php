<?php
/*
 * https://www.hackerrank.com/challenges/circular-array-rotation/problem?isFullScreen=true
 *
 * Complete the 'circularArrayRotation' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER k
 *  3. INTEGER_ARRAY queries
 */

function circularArrayRotation($a, $k, $queries) {
    $n = count($a);
    // Normalize k to be within the bounds of the array length
    $k = $k % $n;

    // Calculate the rotated array
    $rotatedArray = array_merge(array_slice($a, $n - $k), array_slice($a, 0, $n - $k));

    $result = [];
    foreach ($queries as $query) {
        $result[] = $rotatedArray[$query];
    }
    return $result;
}

print_r(circularArrayRotation([3,4,5], 2, [1,2]));