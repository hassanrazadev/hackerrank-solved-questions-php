<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/questions/save-the-prisoner.php';

class SaveThePrisonerTest extends TestCase {
    public function testSaveThePrisoner() {
        // Test case 1
        $this->assertEquals(6, saveThePrisoner(7, 19, 2));

        // Test case 2
        $this->assertEquals(3, saveThePrisoner(3, 7, 3));

        // Test case 3
        $this->assertEquals(2, saveThePrisoner(5, 2, 1));

        // Test case 4
        $this->assertEquals(3, saveThePrisoner(5, 2, 2));

        // Test case 5
        $this->assertEquals(7, saveThePrisoner(7, 7, 1));

        // Test case 6
        $this->assertEquals(3, saveThePrisoner(4, 6, 2));

        // Test case 7
        $this->assertEquals(5, saveThePrisoner(6, 9, 3));

        // Test case 8
        $this->assertEquals(5, saveThePrisoner(5, 5, 1));

        // Test case 9
        $this->assertEquals(2, saveThePrisoner(2, 2, 1));

        // Test case 10
        $this->assertEquals(5, saveThePrisoner(7, 19, 1));
    }
}
