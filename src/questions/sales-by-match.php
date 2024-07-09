<?php
/*
 * https://www.hackerrank.com/challenges/sock-merchant/problem?isFullScreen=true
 *
 * Complete the 'sockMerchant' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY ar
 */

function sockMerchant($n, $ar) {
    // Write your code here
    $socksOfType = [];

    for ($i = 0; $i < count($ar); $i++) {
        if (isset($socksOfType[$ar[$i]])) {
            $socksOfType[$ar[$i]] = $socksOfType[$ar[$i]] + 1;
        } else {
            $socksOfType[$ar[$i]] = 1;
        }
    }

    // above can be written shortly as
    // $socksOfType = array_count_values($ar);

    $numberOfPairs = 0;
    foreach ($socksOfType as $type => $count) {
        $numberOfPairs += floor($count / 2);
    }

    return $numberOfPairs;

}