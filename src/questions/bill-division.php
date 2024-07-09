<?php
/*
 * https://www.hackerrank.com/challenges/bon-appetit/problem?isFullScreen=true
 *
 * Complete the 'bonAppetit' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY bill
 *  2. INTEGER k
 *  3. INTEGER b
 */

function bonAppetit($bill, $k, $b) {
    // Write your code here
    $totalSharedBill = 0;
    for ($i = 0; $i < count($bill); $i++) {
        if ($i != $k) {
            $totalSharedBill += $bill[$i];
        }
    }

    if ($totalSharedBill / 2 == $b) {
        print "Bon Appetit";
        return "Bon Appetit";
    } else {
        print $b - ($totalSharedBill / 2);
        return $b - ($totalSharedBill / 2);
    }
}