<?php

/*
 * https://www.hackerrank.com/challenges/day-of-the-programmer/problem?isFullScreen=true
 *
 * Complete the 'dayOfProgrammer' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts INTEGER year as parameter.
 */
function dayOfProgrammer($year) {
    // Write your code here

    $dayOfYear = 256;

    if ($year == 1918) {
        // Special case for the year 1918 due to calendar change
        return "26.09.1918";
    }

    // Determine if it's a leap year in the Julian or Gregorian calendar
    $isLeapYear = false;
    if ($year < 1918) {
        // Julian calendar
        $isLeapYear = $year % 4 == 0;
    } else {
        // Gregorian calendar
        $isLeapYear = ($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0);
    }

    $daysInMonth = [
        1 => 31,
        2 => $isLeapYear ? 29 : 28,
        3 => 31,
        4 => 30,
        5 => 31,
        6 => 30,
        7 => 31,
        8 => 31,
        9 => 30,
        10 => 31,
        11 => 30,
        12 => 31
    ];

    // Calculate the month and day of the 256th day
    $monthOfYear = 1;
    $dayOfMonth = 1;

    $numberOfDays = 0;
    foreach ($daysInMonth as $month => $days) {
        if ($numberOfDays + $days >= $dayOfYear) {
            $monthOfYear = $month;
            $dayOfMonth = $dayOfYear - $numberOfDays;
            break;
        } else {
            $numberOfDays += $days;
        }
    }

    return sprintf('%02d', $dayOfMonth) .'.'.sprintf('%02d', $monthOfYear).'.'.sprintf('%02d', $year);
}
