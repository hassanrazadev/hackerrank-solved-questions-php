<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/questions/electronics-shop.php';

class ElectronicsShopTest extends TestCase {
    public function testElectronicsShop() {

        $this->assertEquals(58, getMoneySpent([40,50,60], [5,8,12], 60));

        $this->assertEquals(9, getMoneySpent([3, 1], [5,2,8], 10));

        $this->assertEquals(-1, getMoneySpent([4], [5], 5));
    }
}
