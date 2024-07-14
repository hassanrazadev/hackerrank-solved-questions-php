<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/questions/the-hurdle-race.php';

class TheHurdleRaceTest extends TestCase {
    public function testHurdleRace() {
        $this->assertEquals(2, hurdleRace(4, [1,6,3,5,2]));


        $this->assertEquals(0, hurdleRace(7, [2,5,4,5,2]));

    }
}
