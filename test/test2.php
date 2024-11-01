<?php
//1
$ovoce = ["jablko", "pomeranc", "banan", "mandarinka"];

$ovoce[4] = "pomeranc";

print_r($ovoce);

echo "<br>";

//2

$duplicatovoce = array_unique($ovoce);

print_r($duplicatovoce);

echo "<br>";

//3

echo implode(", ", $duplicatovoce);


?>