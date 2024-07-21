<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/questions/viral-advertising.php';

class ViralAdvertisingTest extends TestCase {
    public function testViralAdvertising() {
        $this->assertEquals(24, viralAdvertising(5));
    }
}
