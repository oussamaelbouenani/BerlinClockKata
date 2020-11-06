<?php


class BerlinClockKata
{

    public function convertToBerlinTime($time):String
    {

        preg_match("/([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})/", $time, $match);
        $hour = $match[1];
        $min = $match[2];
        $sec = $match[3];

        var_dump("Recu -> ".$time);

        return $this->countSeconds($sec)."\n".$this->countHours($hour)."\n".$this->countMinutes($min);
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

    public function countHours(int $int):String{

        $string = $this->countTopHours($int/5);
        $int=$int%5;

        var_dump($string);
        var_dump($int);

        if ($int % 5 == 0) return $string."\n"."[x][x][x][x]";
        if ($int % 5 == 1) return $string."\n"."[R][x][x][x]";
        if ($int % 5 == 2) return $string."\n"."[R][R][x][x]";
        if ($int % 5 == 3) return $string."\n"."[R][R][R][x]";
        if ($int % 5 == 4) return $string."\n"."[R][R][R][R]";
    }
    public function countTopHours(int $int):String{

        if ($int  == 0) return "[x][x][x][x]";
        if ($int  == 1) return "[R][x][x][x]";
        if ($int  == 2) return "[R][R][x][x]";
        if ($int  == 3) return "[R][R][R][x]";
        if ($int  == 4) return "[R][R][R][R]";
    }

    public  function countSeconds(int $int): String  {
        if ($int % 2 == 0) return "[R]";
        return "[x]";
    }

}
?>