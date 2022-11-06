<?php

final class Speedometer
{

    const CONV = 1.609344;

    public static function convertKmToMiles(int $distance): float
    {
        return round($distance / Speedometer::CONV, 2);
    }
    
    public static function convertMilesToKm(int $distance): float
    {
        return round($distance * Speedometer::CONV, 2);
    }
}
