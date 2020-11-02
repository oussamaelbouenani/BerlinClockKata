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

        $this->assertEquals("[x][x][x][x]", $actual);
    }

    public function test_1minute_shouldReturn_Yxxx(){
        $actual = $this->transform("00:01:00");

        $this->assertEquals("[Y][x][x][x]", $actual);
    }

    public function test_2minute_shouldReturn_Yxxx(){
        $actual = $this->transform("00:02:00");

        $this->assertEquals("[Y][Y][x][x]", $actual);
    }

    public function test_3minute_shouldReturn_Yxxx(){
        $actual = $this->transform("00:03:00");

        $this->assertEquals("[Y][Y][Y][x]", $actual);
    }

    public function test_4minutes_shouldReturn_YYYY(){
        $actual = $this->transform("00:04:00");

        $this->assertEquals("[Y][Y][Y][Y]", $actual);
    }

    public function test_5minutes_shouldReturn_xxxx(){
        $actual = $this->transform("00:05:00");

        $this->assertEquals("[x][x][x][x]", $actual);
    }

    /**5minutesBlocs**/

}
