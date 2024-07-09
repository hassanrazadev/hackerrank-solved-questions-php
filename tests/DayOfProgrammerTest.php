<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/questions/day-of-programmer.php';

class DayOfProgrammerTest extends TestCase {

    public function testDayOfProgrammer() {
        // Test case 1: Julian leap year
        $this->assertEquals("12.09.1800", dayOfProgrammer(1800));

        // Test case 2: Julian non-leap year
        $this->assertEquals("13.09.1705", dayOfProgrammer(1705));

        // Test case 3: Gregorian leap year
        $this->assertEquals("12.09.2000", dayOfProgrammer(2000));

        // Test case 4: Gregorian non-leap year
        $this->assertEquals("13.09.2017", dayOfProgrammer(2017));

        // Test case 5: Year 1918 (special case)
        $this->assertEquals("26.09.1918", dayOfProgrammer(1918));

        // Additional test cases

        // Test case 6: Julian leap year (divisible by 4)
        $this->assertEquals("12.09.1804", dayOfProgrammer(1804));

        // Test case 7: Julian non-leap year (not divisible by 4)
        $this->assertEquals("13.09.1801", dayOfProgrammer(1801));

        // Test case 8: Gregorian leap year (divisible by 400)
        $this->assertEquals("12.09.1600", dayOfProgrammer(1600));

        // Test case 9: Gregorian non-leap year (divisible by 100 but not by 400)
        $this->assertEquals("12.09.1900", dayOfProgrammer(1900));

        // Test case 10: Gregorian leap year (divisible by 4 but not by 100)
        $this->assertEquals("12.09.2004", dayOfProgrammer(2004));

        // Test case 11: Edge case year just before 1918 transition
        $this->assertEquals("13.09.1917", dayOfProgrammer(1917));

        // Test case 12: Edge case year just after 1918 transition
        $this->assertEquals("13.09.1919", dayOfProgrammer(1919));

        // Test case 13: Very early Julian year (leap year)
        $this->assertEquals("12.09.1704", dayOfProgrammer(1704));

        // Test case 14: Very early Julian year (non-leap year)
        $this->assertEquals("13.09.1701", dayOfProgrammer(1701));
    }
}
