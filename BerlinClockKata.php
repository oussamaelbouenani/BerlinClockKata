<?php


class BerlinClockKata
{

    public function convertToBerlinTime($time):String
    {

        preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $time, $match);
        $hour = $match[1];
        $min = $match[2];
        $sec = $match[3];

        var_dump("Recu -> ".$min);

        return $this->countMinutes($min);
    }

    public function countMinutes(int $int):String{
        if ($int % 5 == 0) return "[x][x][x][x]";
        if ($int % 5 == 1) return "[Y][x][x][x]";
        if ($int % 5 == 2) return "[Y][Y][x][x]";
        if ($int % 5 == 3) return "[Y][Y][Y][x]";
        if ($int % 5 == 4) return "[Y][Y][Y][Y]";
    }

}