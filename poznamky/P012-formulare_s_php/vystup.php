<?php
    //ZISKANI A VYPSANI DAT Z FORMULARE V HTML


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $jmeno = $_GET["jmeno"]; 

        $heslo = $_GET["heslo"];
    
        echo "ahoj ". $jmeno. " tvoje heslo je ". $heslo;
    }

?>