<?php
$vypis = fopen("data.csv", "r");

while(($radek = fgetcsv($vypis)) !== false){
    foreach ($radek as $polozka) {
        echo $polozka. "<br>";
    }
}

fclose($vypis)
?>