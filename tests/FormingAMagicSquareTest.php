<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/questions/forming-a magic-square.php';

class FormingAMagicSquareTest extends TestCase {
    public function testFormingAMagicSquare() {

        $this->assertEquals(1, formingMagicSquare([[4,9,2],[3,5,7],[8,1,5]]));

        $this->assertEquals(4, formingMagicSquare([[4,8,2],[4,5,7],[6,1,6]]));

    }
}
