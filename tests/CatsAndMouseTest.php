<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/questions/cats-and-mouse.php';

class CatsAndMouseTest extends TestCase {
    public function testCatsAndMouse() {

        $this->assertEquals("Cat B", catAndMouse(2,5,4));

    }
}
