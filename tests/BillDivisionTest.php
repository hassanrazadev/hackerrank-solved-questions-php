<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/questions/bill-division.php';

class BillDivisionTest extends TestCase {
    public function testBillDivision() {
        //Test case 1
        $this->assertEquals('Bon Appetit', bonAppetit([3,10,2,9], 1, 7));
        //Test case 2
        $this->assertEquals(5, bonAppetit([3,10,2,9], 1, 12));

    }
}
