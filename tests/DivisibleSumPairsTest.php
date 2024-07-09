<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/questions/divisible-sum-pairs.php';

class DivisibleSumPairsTest extends TestCase {
    function testDivisibleSumPairs() {
        // Test case 1
        $n1 = 6;
        $k1 = 3;
        $ar1 = [1, 3, 2, 6, 1, 2];
        $this->assertEquals(5, divisibleSumPairs($n1, $k1, $ar1));

        // Test case 2
        $n2 = 5;
        $k2 = 2;
        $ar2 = [1, 2, 3, 4, 5];
        $this->assertEquals(4, divisibleSumPairs($n2, $k2, $ar2));

        // Test case 3
        $n3 = 4;
        $k3 = 5;
        $ar3 = [1, 5, 3, 4];
        $this->assertEquals(1, divisibleSumPairs($n3, $k3, $ar3));

        // Test case 4
        $n4 = 3;
        $k4 = 6;
        $ar4 = [6, 12, 18];
        $this->assertEquals(3, divisibleSumPairs($n4, $k4, $ar4));

        // Test case 5
        $n5 = 7;
        $k5 = 4;
        $ar5 = [1, 2, 3, 4, 5, 6, 7];
        $this->assertEquals(5, divisibleSumPairs($n5, $k5, $ar5));
    }
}
