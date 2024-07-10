<?php

/**
 * https://www.hackerrank.com/challenges/cats-and-a-mouse/problem?isFullScreen=true
 *
 * @param $x // cat 1
 * @param $y // cat 2
 * @param $z // mouse
 * @return string
 *
 *  Complete the catAndMouse function below.
 */
function catAndMouse($x, $y, $z): string {
    $catA = abs($z - $x);
    $catB = abs($z - $y);

    if ($catA > $catB) {
        print "Cat B";
        return "Cat B";
    } elseif ($catB > $catA) {
        print "Cat A";
        return "Cat A";
    }
    print "Mouse C";
    return "Mouse C";
}