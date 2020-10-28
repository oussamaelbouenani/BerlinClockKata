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

    // Yellow lamp should blink on/off every two seconds
    public function testYellowLampShouldBlinkOnOffEveryTwoSeconds():void {
        assertEquals("Y", $this->berlinClock->getSeconds(0));
       
    }


}