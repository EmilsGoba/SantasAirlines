<?php

require "Aircraft.php";
require "Airport.php";


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


$manaLidmasina = new Aircraft("Airbus","A220-300", 120, 820);

var_dump($manaLidmasina);

echo "<br>";

$manaLidosta = new Airport("RIX", 56.924, 23.971);

var_dump($manaLidosta);