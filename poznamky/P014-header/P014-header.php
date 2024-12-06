<?php
    // header musi byt vzdy umisten na konci kodu
    // header("event/atribut")
    // exit/die - donuti ukonceni skriptu po aplkaci header


    //redirect header
    header("Location: ../P001-komentare.php");
    exit;

    /*
    dalsi pouziti

    nastaveni typu obsahu:
    header("Content-type: application/pdf");

    readfile("dokument.pdf")

    cache

    a) zakaz cache
    header("Cache-Control: no-cache, no-store, must-revalidate")

    b) na urcitou dobu
    header("Cache-Control: max-age=600") 10 minut
    */
?>