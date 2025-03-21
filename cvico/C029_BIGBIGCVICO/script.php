<?php
$vyber = $_POST["vyber"]; 

if ($vyber == 1) {
    for($i = 0; $i <= 10; $i++){
    echo $i."<br>";
}
} elseif ($vyber == 2) {
    $jmena = array("max"=>"20", "patrik"=>"12", "ondra"=>"99");

    foreach ($jmena as $x => $y) {
      echo "$x : $y <br>";
    }
} elseif ($vyber == 3) {
    $i = 10;
    while ($i >= 1) {
        echo $i;
        $i--;
    }
} elseif ($vyber == 4) {
    $a =1;
    do {
        echo $a;
        $a++;
    } while ($a <= 5);
} elseif ($vyber == 5) {
    $heslo = "Pacner123";
    if ($heslo == "Pacner123") {
        echo "Přihlášen";
    } else {
        echo "Špatné heslo";
    }
} elseif ($vyber == 6) {
    $den = "pondeli";

    switch ($den) {
        case "pondeli":
            echo "je pondeli";
            break;
        
        case "utery":
            echo "je utery";
            break;

        case "streda":
            echo "je streda";
            break;

        case "ctvrtek":
            echo "je ctvrtek";
            break;
        
        case "patek":
            echo "je patek";
            break;
        
        default:
            echo "je vikend";
            break;
}
}





?>