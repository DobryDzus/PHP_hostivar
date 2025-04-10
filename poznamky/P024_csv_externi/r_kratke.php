<?php

$soubor = "data.csv";

$vypis = fopen($soubor, "r");

$radek = fgetcsv($vypis);


foreach ($radek as $bunka) {
    echo $bunka. ", " ; //vypise hodnotu v poli radku
}

?>