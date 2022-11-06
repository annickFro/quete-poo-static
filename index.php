<?php

require_once "Speedometer.php" ;


$distance = 10;
echo $distance . " km    équivaut à " . Speedometer::convertKmToMiles($distance) .  " miles\n";

echo $distance . " miles équivaut à " . Speedometer::convertMilesToKm($distance) .  " km\n";

