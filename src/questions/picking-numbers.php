<?php
/*
 * https://www.hackerrank.com/challenges/picking-numbers/problem?isFullScreen=true
 *
 * Complete the 'pickingNumbers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function pickingNumbers($a) {
    // Write your code here
    $distinctNumbers = [];

    foreach ($a as $number) {
        if (isset($distinctNumbers[$number])) {
            $distinctNumbers[$number]++;
        } else {
            $distinctNumbers[$number] = 1;
        }
    }
    // OR
    // $distinctNumbers = array_count_values($a);

    $longestArray = 0;
    // Iterate through each unique number in the array
    foreach ($distinctNumbers as $number => $length) {
        // Calculate the length of the subarray including the current number and the number+1
        $currentLength = $length;
        if (isset($distinctNumbers[$number + 1])) {
            $currentLength += $distinctNumbers[$number + 1];
        }

        // Update the longest subarray length if the current one is longer
        if ($currentLength > $longestArray) {
            $longestArray = $currentLength;
        }
    }

    return $longestArray;
}
