<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/questions/migratory-birds.php';

class MigratoryBirdsTest extends TestCase {
    public function testMigratoryBirds() {

        // Test case 1
        $arr1 = [1, 1, 2, 2, 3];
        $this->assertEquals(1, migratoryBirds($arr1));

        // Test case 2
        $arr2 = [1, 4, 4, 4, 5, 3];
        $this->assertEquals(4, migratoryBirds($arr2));

        // Test case 3
        $arr3 = [3, 3, 2, 2, 1, 1, 1];
        $this->assertEquals(1, migratoryBirds($arr3));

        // Test case 4
        $arr4 = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
        $this->assertEquals(3, migratoryBirds($arr4));
    }
}
