<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/questions/between-two-sets.php";

class BetweenToSetsTest extends TestCase {

    function testBetweenTwoSets() {
        $a1 = [2, 4];
        $b1 = [16, 32, 96];
        $this->assertEquals(3, getTotalX($a1, $b1));

        // Test case 2
        $a2 = [3, 4];
        $b2 = [24, 48];
        $this->assertEquals(2, getTotalX($a2, $b2));

        // Test case 3
        $a3 = [1];
        $b3 = [100];
        $this->assertEquals(9, getTotalX($a3, $b3));

        // Test case 4
        $a4 = [2, 6];
        $b4 = [24, 36];
        $this->assertEquals(2, getTotalX($a4, $b4));

        // Test case 5
        $a5 = [2];
        $b5 = [20, 30, 12];
        $this->assertEquals(1, getTotalX($a5, $b5));
    }
}
