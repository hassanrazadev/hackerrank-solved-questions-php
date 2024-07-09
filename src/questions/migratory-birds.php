<?php

/*
 * https://www.hackerrank.com/challenges/migratory-birds/problem?isFullScreen=true
 *
 * Complete the 'migratoryBirds' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function migratoryBirds($arr) {
    $sighting_of_types = [];
    foreach ($arr as $type) {
        if (isset($sighting_of_types[$type])) {
            $sighting_of_types[$type]++;
        } else {
            $sighting_of_types[$type] = 1;
        }
    }

    $most_sighted_bird_type = null;
    $most_sighted_count = 0;

    foreach ($sighting_of_types as $type => $count) {
        if ($count > $most_sighted_count || ($count === $most_sighted_count && $type < $most_sighted_bird_type)) {
            $most_sighted_bird_type = $type;
            $most_sighted_count = $count;
        }
    }

    return $most_sighted_bird_type;
}

print_r(migratoryBirds([3,2,2,1,1]));