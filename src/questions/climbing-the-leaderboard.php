<?php
/*
 * Complete the 'climbingLeaderboard' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY ranked
 *  2. INTEGER_ARRAY player
 */

function climbingLeaderboard($ranked, $player) {

    $distinctRankings = array_values(array_unique($ranked));
    rsort($distinctRankings);

    $playerRankings = [];

    foreach ($player as $p) {
        // Find the appropriate rank for the player's score
        $rank = 1;
        foreach ($distinctRankings as $rankedScore) {
            if ($p < $rankedScore) {
                $rank++;
            } else {
                break;
            }
        }
        $playerRankings[] = $rank;
    }

    return $playerRankings;
}