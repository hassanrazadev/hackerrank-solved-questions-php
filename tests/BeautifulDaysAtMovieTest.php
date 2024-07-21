<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__."/../src/questions/beautiful-days-at-movie.php";

class BeautifulDaysAtMovieTest extends TestCase {
    public function testBeautifulDaysAtMovie() {
        $this->assertEquals(2, beautifulDays(20, 23, 6));
    }

}
