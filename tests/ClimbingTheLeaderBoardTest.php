<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/questions/climbing-the-leaderboard.php';

class ClimbingTheLeaderBoardTest extends TestCase {
    public function testClimbingTheLeaderBoard() {
        $this->assertEquals([6,4,2,1], climbingLeaderboard([100,100,50,40,40,20,10], [5,25,50,120]));
    }
}
