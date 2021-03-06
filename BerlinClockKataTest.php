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
            "[R]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",
            $actual);
    }

    public function test_1minute_shouldReturn_Yxxx(){
        $actual = $this->transform("00:01:00");

        $this->assertEquals(
            "[R]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[Y][x][x][x]",
            $actual);
    }

    public function test_2minutes_shouldReturn_YYxx(){
        $actual = $this->transform("00:02:00");

        $this->assertEquals(
            "[R]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[Y][Y][x][x]",
            $actual);
    }

    public function test_3minutes_shouldReturn_YYYx(){
        $actual = $this->transform("00:03:00");

        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[Y][Y][Y][x]",
            $actual);
    }

    public function test_4minutes_shouldReturn_YYYY(){
        $actual = $this->transform("00:04:00");

        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[Y][Y][Y][Y]", $actual);
    }

    public function test_5minutes_shouldReturn_xxxx(){
        $actual = $this->transform("00:05:00");

        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }

    /**5minutesBlocs**/

    /**FiveminutesBlocs**/
    public function test_5Minutes_shouldReturn_Yxxxxxxxxxx() {
        $actual = $this->transform("00:05:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function test_10Minutes_shouldReturn_YYxxxxxxxxx() {
        $actual = $this->transform("00:10:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function test_15Minutes_shouldReturn_YYRxxxxxxxx() {
        $actual = $this->transform("00:15:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][R][x][x][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function test_20Minutes_shouldReturn_YYRYxxxxxxx() {
        $actual = $this->transform("00:20:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][R][Y][x][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function test_25Minutes_shouldReturn_YYRYYxxxxxx() {
        $actual = $this->transform("00:25:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][R][Y][Y][x][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function test_30Minutes_shouldReturn_YYRYYRxxxxx() {
        $actual = $this->transform("00:30:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][R][Y][Y][R][x][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function test_35Minutes_shouldReturn_YYRYYRYxxxx() {
        $actual = $this->transform("00:35:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][R][Y][Y][R][Y][x][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function test_40Minutes_shouldReturn_YYRYYRYYxxx() {
        $actual = $this->transform("00:40:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][R][Y][Y][R][Y][Y][x][x][x]\n[x][x][x][x]",$actual);
    }
    public function test_45Minutes_shouldReturn_YYRYYRYYRxx() {
        $actual = $this->transform("00:45:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][R][Y][Y][R][Y][Y][R][x][x]\n[x][x][x][x]",$actual);
    }
    public function test_50Minutes_shouldReturn_YYRYYRYYRYx() {
        $actual = $this->transform("00:50:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][R][Y][Y][R][Y][Y][R][Y][x]\n[x][x][x][x]",$actual);
    }
    public function test_55Minutes_shouldReturn_YYRYYRYYRYY() {
        $actual = $this->transform("00:55:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[Y][Y][R][Y][Y][R][Y][Y][R][Y][Y]\n[x][x][x][x]",$actual);
    }

    /**Simple Hours**/

    public function test_0Hour_shouldReturn_Empty(){
        $actual = $this->transform("00:00:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_1Hours_shouldReturn_Rxxx(){
        $actual = $this->transform("01:00:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[R][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_2Hours_shouldReturn_RRxx(){
        $actual = $this->transform("02:00:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[R][R][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_3Hours_shouldReturn_RRRx(){
        $actual = $this->transform("03:00:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[R][R][R][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_4Hours_shouldReturn_RRRR(){
        $actual = $this->transform("04:00:00");
        $this->assertEquals("[R]\n[x][x][x][x]\n[R][R][R][R]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_5Hours_shouldReturn_Empty(){
        $actual = $this->transform("05:00:00");
        $this->assertEquals("[R]\n[R][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    /**Top Hours every 5 hours should light one lamp **/

    public function test_6Hours_shouldReturn_Rxxx(){
        $actual = $this->transform("06:00:00");
        $this->assertEquals("[R]\n[R][x][x][x]\n[R][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_8Hours_shouldReturn_Rxxx(){
        $actual = $this->transform("08:00:00");
        $this->assertEquals("[R]\n[R][x][x][x]\n[R][R][R][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_10Hours_shouldReturnRRxx(){
        $actual = $this->transform("10:00:00");
        $this->assertEquals("[R]\n[R][R][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_15Hours_shouldReturn_RRRx(){
        $actual = $this->transform("15:00:00");
        $this->assertEquals("[R]\n[R][R][R][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_20Hours_shouldReturn_RRRR(){
        $actual = $this->transform("20:00:00");
        $this->assertEquals("[R]\n[R][R][R][R]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }
    public function test_24Hours_shouldReturn_RRRR(){
        $actual = $this->transform("24:00:00");
        $this->assertEquals("[R]\n[R][R][R][R]\n[R][R][R][R]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]", $actual);
    }

    /**Seconds Lamp Light If the second is pair**/

    public function test_0second_shouldReturn_R(){
        $actual = $this->transform("00:00:00");

        $this->assertEquals(
            "[R]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",
            $actual);
    }

    public function test_1second_shouldReturn_x(){
        $actual = $this->transform("00:00:01");

        $this->assertEquals(
            "[x]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",
            $actual);
    }
    public function test_3seconds_shouldReturn_x(){
        $actual = $this->transform("00:00:03");

        $this->assertEquals(
            "[x]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",
            $actual);
    }
    public function test_4seconds_shouldReturn_x(){
        $actual = $this->transform("00:00:04");

        $this->assertEquals(
            "[R]\n[x][x][x][x]\n[x][x][x][x]\n[x][x][x][x][x][x][x][x][x][x][x]\n[x][x][x][x]",
            $actual);
    }

     /**Show whole clock with a correct seconds minutes and hours**/
 
    public function test_Show_whole_clock_with_a_correct_seconds_minutes_and_hours() : void {
        $berlinTime [] = $this->berlinClock->convertToBerlinTime("23:51:20");
        $expecte [] = "[R]" . "\n" . "[R][R][R][R]" . "\n" . "[R][R][R][x]" . "\n" . "[Y][Y][R][Y][Y][R][Y][Y][R][Y][x]" . "\n" . "[Y][x][x][x]";

        $this->assertEquals(count($expecte), count($berlinTime));
        for ($i = 0; $i < count($expecte); $i++) {
            $this->assertEquals($expecte[$i], $berlinTime[$i]);
        }

    }

}
