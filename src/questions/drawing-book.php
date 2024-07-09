<?php
/*
 * https://www.hackerrank.com/challenges/drawing-book/problem
 *
 * Complete the 'pageCount' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER p
 */

function pageCount($n, $p) {
    // Calculate the turns from the front
    $frontTurns = floor($p / 2);
    // Calculate the turns from the back
    $backTurns = floor($n / 2) - $frontTurns;

    // Return the minimum of the two
    return min([$frontTurns, $backTurns]);
}

print_r(pageCount(6,5));