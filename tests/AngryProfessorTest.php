<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/questions/angry-professor.php';

class AngryProfessorTest extends TestCase {

    public function testAngryProfessor() {
        $this->assertEquals("NO", angryProfessor(2, [0,-1,2,1]));
        $this->assertEquals("YES", angryProfessor(3, [-1,-3,4,2]));
    }
}
