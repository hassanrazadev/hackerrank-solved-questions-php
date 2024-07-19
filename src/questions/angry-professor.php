<?php
/*
 * https://www.hackerrank.com/challenges/angry-professor/problem?isFullScreen=true
 *
 * Complete the 'angryProfessor' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY a
 */

function angryProfessor($k, $a) {
    // Write your code here

    $arrivedOnTime = 0;

    foreach ($a as $key => $time) {
        if ($time <= 0) {
            $arrivedOnTime ++;
        }
    }

    return $arrivedOnTime >= $k ? "NO" : "YES";
}