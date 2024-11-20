<?php

require "Aircraft.php";
require "Airport.php";
require "Flight.php";


/*
echo "serveris strada";
$x = 5+4;
echo "<br> $x";

$y=8+4;
echo"<br> $y";

function addFour($x){
    $rezultats=$x+4;
    echo"<br> $rezultats";
}

addFour(5);
addFour(8);
*/


$departureTime = new DateTime("2024-11-09 18:39:00");

$manaLidmasina = new Aircraft("Airbus", "A220-300", 120, 820);
var_dump($manaLidmasina);

$manaLidosta = new Airport("RIX", 56.924, 23.971);
var_dump($manaLidosta);

$manaLidosta2 = new Airport("BGW", 27.00, 2.40);
var_dump($manaLidosta2);

$mansLidojums = new Flight("SA503", $manaLidosta, $manaLidosta2, $departureTime, $manaLidmasina);
var_dump($mansLidojums);

echo $mansLidojums->getDistance(); // Distance between airports
echo "<br>";
echo $mansLidojums->getDuration(); // Flight duration in minutes
