<?php


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nickname = $_GET["nickname"]; 
        $heslo = $_GET["password"]; 
        $obtiznost = $_GET["obtiznost"];

    
        echo "Váš nick je <strong>". $nickname. "</strong>";
        echo "<br>";

        echo "Heslo je <strong>". $heslo. "</strong>";
        echo "<br>";

        echo "Obtiznost <strong>". $obtiznost. "</strong>";
    }

?>