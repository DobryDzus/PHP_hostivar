<?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $deti = $_GET["deti"];

        $dospeli = $_GET["dospeli"];

        $sleva = $_GET["sleva"];
    
    }


    if ($sleva == 1) {
        $sleva_vypis = "Beze slevy"; 
    } elseif ($sleva == 0.75) {
        $sleva_vypis = "25%"; 
    } elseif ($sleva == 0.50) {
        $sleva_vypis = "50%";
    }

    $cena_dospeli = $dospeli * 200;
    $cena_deti = $deti * 100;
    $cena_dohromady = $cena_deti + $cena_dospeli;

    echo "Dospělí: ".$dospeli. "<br>";

    echo "Děti: ". $deti. "<br>";

    echo "Cena beze slevy: ". $cena_dohromady. "<br>";

    echo "Zvolená sleva: ". $sleva_vypis. "<br>";

    echo "Cena se slevou: ". $cena_dohromady * $sleva;


    
?>