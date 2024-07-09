<?php

/*
 * https://www.hackerrank.com/challenges/counting-valleys/problem?isFullScreen=true
 *
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 */

function countingValleys($steps, $path) {
    // Write your code here
    $isSeaLevel = true;
    $numberOfValleys = 0;

    $downStep = [];
    $upStep = [];

    for ($i = 0; $i < $steps; $i++) {
        if ($path[$i] == "D") {
            $downStep[] = $path[$i];
            if ($isSeaLevel) {
                $numberOfValleys ++;
            }
        } elseif ($path[$i] == "U") {
            $upStep[] = $path[$i];
        }

        if (count($downStep) == count($upStep)) {
            $isSeaLevel = true;
        } else {
            $isSeaLevel = false;
        }
    }

    return $numberOfValleys;
}