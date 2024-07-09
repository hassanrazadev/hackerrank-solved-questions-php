<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/questions/counting-valleys.php';

class CountingValleysTest extends TestCase {
    public function testCountingValleys() {
        //
        $this->assertEquals(1, countingValleys(8, 'UDDDUDUU'));
    }
}
