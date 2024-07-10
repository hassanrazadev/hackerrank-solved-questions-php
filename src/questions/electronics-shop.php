<?php

/*
 * https://www.hackerrank.com/challenges/electronics-shop/problem?isFullScreen=true
 * 
 * Complete the getMoneySpent function below.
 */
function getMoneySpent($keyboards, $drives, $b) {
    /*
     * Write your code here.
     */
    $spentBudget = 0;
    foreach ($keyboards as $keyboard) {
        foreach ($drives as $drive) {
            $budget = $drive + $keyboard;
            if ($budget > $spentBudget && $budget <= $b) {
                $spentBudget = $budget;
            }
        }
    }

    if ($spentBudget > 0) {
        return $spentBudget;
    }
    return -1;
}