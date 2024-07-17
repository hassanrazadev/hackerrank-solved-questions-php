<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/questions/utopian-tree.php';

class UtopianTreeTest extends TestCase {
    public function testUtopianTree() {
        $this->assertEquals(1, utopianTree(0));
        $this->assertEquals(2, utopianTree(1));
        $this->assertEquals(3, utopianTree(2));
        $this->assertEquals(6, utopianTree(3));
        $this->assertEquals(7, utopianTree(4));
    }
}
