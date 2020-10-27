<?php

require "vendor/autoload.php";
require "BerlinClockKata.php";

use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    public function test (){

        $myclass = new BerlinClockKata();

        $actual = $myclass->testMethod(1);

        assertEquals(1, $actual);
    }

}
