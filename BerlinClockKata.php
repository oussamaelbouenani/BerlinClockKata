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

        $string = $this->countFiveMinutes($int/5);
        $int=$int%5;

        var_dump($string);
        var_dump($int);

        if ($int == 0) return $string."\n"."[x][x][x][x]";
        if ($int == 1) return $string."\n"."[Y][x][x][x]";
        if ($int == 2) return $string."\n"."[Y][Y][x][x]";
        if ($int == 3) return $string."\n"."[Y][Y][Y][x]";
        if ($int == 4) return $string."\n"."[Y][Y][Y][Y]";
    }

    public function countFiveMinutes(int $int):String{
        if ($int == 0) return "[x][x][x][x][x][x][x][x][x][x][x]";
        if ($int == 1) return "[Y][x][x][x][x][x][x][x][x][x][x]";
        if ($int == 2) return "[Y][Y][x][x][x][x][x][x][x][x][x]";
        if ($int == 3) return "[Y][Y][R][x][x][x][x][x][x][x][x]";
        if ($int == 4) return "[Y][Y][R][Y][x][x][x][x][x][x][x]";
        if ($int == 5) return "[Y][Y][R][Y][Y][x][x][x][x][x][x]";
        if ($int == 6) return "[Y][Y][R][Y][Y][R][x][x][x][x][x]";
        if ($int == 7) return "[Y][Y][R][Y][Y][R][Y][x][x][x][x]";
        if ($int == 8) return "[Y][Y][R][Y][Y][R][Y][Y][x][x][x]";
        if ($int == 9) return "[Y][Y][R][Y][Y][R][Y][Y][R][x][x]";
        if ($int == 10) return"[Y][Y][R][Y][Y][R][Y][Y][R][Y][x]";
        if ($int == 11) return"[Y][Y][R][Y][Y][R][Y][Y][R][Y][Y]";
    }

}