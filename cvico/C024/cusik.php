<?php
for ($i=0; $i < 100; $i++) { 
    $pole[$i] = $i+1; 
}
print_r($pole);

echo "<br>";

echo count($pole);

echo "<br>";

rsort($pole);
print_r($pole);

echo "<br>";

$oddeleny = implode(",", $pole);

echo $oddeleny;
?>