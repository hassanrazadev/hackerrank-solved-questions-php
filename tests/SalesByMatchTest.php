<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/questions/sales-by-match.php';

class SalesByMatchTest extends TestCase {

    public function testSalesByMatch() {
        // Test case 1: Basic example with one pair each of three colors
        $this->assertEquals(3, sockMerchant(9, [10, 20, 20, 10, 10, 30, 50, 10, 20]));

        // Test case 2: All socks are of the same color (should return 3 pairs)
        $this->assertEquals(3, sockMerchant(7, [10, 10, 10, 10, 10, 10, 10]));

        // Test case 3: No pairs (all socks are different colors)
        $this->assertEquals(0, sockMerchant(5, [1, 2, 3, 4, 5]));
    }
}
