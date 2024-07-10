<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/questions/picking-numbers.php';

class PickingNumbersTest extends TestCase {
    public function testPickingNumbers() {

        $this->assertEquals(3, pickingNumbers([4,6,5,3,3,1]));

        $this->assertEquals(5, pickingNumbers([1,2,2,3,1,2]));

    }
}
