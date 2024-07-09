<?php
/*
 * https://www.hackerrank.com/challenges/between-two-sets/problem?isFullScreen=true
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */
function getTotalX($a, $b) {
    // Get the maximum of array a and the minimum of array b
    $maxA = max($a);
    $minB = min($b);

    $count = 0;

    // Iterate through each number in the range [maxA, minB]
    for ($i = $maxA; $i <= $minB; $i++) {
        // Check if all elements in a are factors of i
        $isFactorOfA = true;
        foreach ($a as $numA) {
            if ($i % $numA != 0) {
                $isFactorOfA = false;
                break;
            }
        }

        // Check if i is a factor of all elements in b
        $isFactorOfB = true;
        foreach ($b as $numB) {
            if ($numB % $i != 0) {
                $isFactorOfB = false;
                break;
            }
        }

        // If i satisfies both conditions, increment the count
        if ($isFactorOfA && $isFactorOfB) {
            $count++;
        }
    }

    return $count;
}
