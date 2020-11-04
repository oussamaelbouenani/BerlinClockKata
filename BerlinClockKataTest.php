<?php

require "vendor/autoload.php";
require "BerlinClockKata.php";

use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{

    private $berlinClock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClock = new BerlinClockKata();
    }

    public function transform(String $str):String{
        return $this->berlinClock->convertToBerlinTime($str);
    }

    /**SimpleMinutes**/

    public function test_0minute_shouldReturn_Empty(){
        $actual = $this->transform("00:00:00");

        $this->assertEquals(
            "[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",
            $actual);
    }

    public function test_1minute_shouldReturn_Yxxx(){
        $actual = $this->transform("00:01:00");

        $this->assertEquals(
            "[x][x][x][x][x][x][x][x][x][x][x]\n[Y][x][x][x]",
            $actual);
    }

    public function test_2minute_shouldReturn_Yxxx(){
        $actual = $this->transform("00:02:00");

        $this->assertEquals(
            "[x][x][x][x][x][x][x][x][x][x][x]\n[Y][Y][x][x]",
            $actual);
    }

    public function test_3minute_shouldReturn_Yxxx(){
        $actual = $this->transform("00:03:00");

        $this->assertEquals("[x][x][x][x][x][x][x][x][x][x][x]\n[Y][Y][Y][x]",
            $actual);
    }

    public function test_4minutes_shouldReturn_YYYY(){
        $actual = $this->transform("00:04:00");

        $this->assertEquals("[x][x][x][x][x][x][x][x][x][x][x]\n[Y][Y][Y][Y]", $actual);
    }

    public function test_5minutes_shouldReturn_xxxx(){
        $actual = $this->transform("00:05:00");

        $this->assertEquals("[Y][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }

    /**5minutesBlocs**/

    /**FiveminutesBlocs**/
    public function testFiveMinutesShouldReturnOneLightYellowAndTenLightOff() {
        $actual = $this->transform("00:05:00");
        $this->assertEquals("[Y][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function testTenMinutesShouldReturnTwoLightYellowAndNineLightOff() {
             $actual = $this->transform("00:10:00");
             $this->assertEquals("[Y][Y][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function testFifteenMinutesShouldReturnTwoLightYellowAndOneLightRedAndEightLightOff() {
        $actual = $this->transform("00:15:00");
        $this->assertEquals("[Y][Y][R][x][x][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function testTwentyMinutesShouldReturnThreeLightYellowAndOneLightRedAndSeventLightOff() {
         $actual = $this->transform("00:20:00");
         $this->assertEquals("[Y][Y][R][Y][x][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function testTwentyFiveMinutesShouldReturnFourLightYellowAndOneLightRedAndSixLightOff() {
        $actual = $this->transform("00:25:00");
        $this->assertEquals("[Y][Y][R][Y][Y][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function testThirtyMinutesShouldReturnFourLightYellowAndTwoLightRedAndFiveLightOff() {
         $actual = $this->transform("00:30:00");
         $this->assertEquals("[Y][Y][R][Y][Y][R][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function testThirtyFiveMinutesShouldReturnFiveLightYellowAndTwoLightRedAndFourLightOff() {
        $actual = $this->transform("00:35:00");
        $this->assertEquals("[Y][Y][R][Y][Y][R][Y][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function testFourtyMinutesShouldReturnSixLightYellowAndTwoLightRedAndThreeLightOff() {
         $actual = $this->transform("00:40:00");
         $this->assertEquals("[Y][Y][R][Y][Y][R][Y][Y][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function testFourtyFiveMinutesShouldReturnSixLightYellowAndThreeLightRedAndTwoLightOff() {
        $actual = $this->transform("00:45:00");
        $this->assertEquals("[Y][Y][R][Y][Y][R][Y][Y][R][x][x]\n[x][x][x][x]",$actual);
    }
    public function testFiftyMinutesShouldReturnSevenLightYellowAndThreeLightRedAndOneLightOff() {
         $actual = $this->transform("00:50:00");
         $this->assertEquals("[Y][Y][R][Y][Y][R][Y][Y][R][Y][x]\n[x][x][x][x]",$actual);
    }
    public function testFiftyFiveMinutesShouldReturnEightLightYellowAndThreeLightRed() {
        $actual = $this->transform("00:55:00");
        $this->assertEquals("[Y][Y][R][Y][Y][R][Y][Y][R][Y][Y]\n[x][x][x][x]",$actual);
    }

}
