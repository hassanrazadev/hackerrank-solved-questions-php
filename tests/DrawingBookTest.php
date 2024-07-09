<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ .'/../src/questions/drawing-book.php';

class DrawingBookTest extends TestCase {
    public function testDrawingBook() {
        // Test case 1
        $this->assertEquals(1, pageCount(6,2));
        // Test case 2
        $this->assertEquals(0, pageCount(5,4));

        $this->assertEquals(1, pageCount(6,5));
    }
}
