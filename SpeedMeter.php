<?php


class Speedometer
{

    private const CONVERTER=0.621;

    public static function convertKmToMiles(float $km) : ?float
    {
        return self::CONVERTER * $km;
    }
}