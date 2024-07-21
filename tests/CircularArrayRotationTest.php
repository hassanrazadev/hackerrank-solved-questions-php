<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/questions/circular-array-rotation.php';

class CircularArrayRotationTest extends TestCase {
    public function testCircularArrayRotation() {
        // Test case 1: Small array, small k
        $this->assertEquals([5, 3], circularArrayRotation([3, 4, 5], 2, [1, 2]));

        // Test case 2: Array with repeated elements
        $this->assertEquals([2, 2], circularArrayRotation([1, 2, 2, 3], 1, [2, 2]));
    }
}
