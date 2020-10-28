<?php


class BerlinClockKata
{

    public function convertToBerlinTime($time):array
    {
        preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $time, $match);
        $hour = $match[1];
        $min = $match[2];
        $sec = $match[3];

        return array($hour, $min, $sec);
    }

    public function getSeconds(int $int):string
    {
        if ($int % 2 == 0) return "Y";
        else return "O";
    }

}