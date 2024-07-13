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
    $rankIndex = count($distinctRankings) - 1;

    foreach ($player as $p) {
        while ($rankIndex >= 0 && $p >= $distinctRankings[$rankIndex]) {
            $rankIndex--;
        }
        $playerRankings[] = $rankIndex + 2;
    }

    return $playerRankings;
}