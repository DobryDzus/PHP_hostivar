<?php
echo "<h1> IF lepsi nez SWITCH </h1>";

$vek = 25;
if ($vek > 18 and $vek < 65){
    echo "muzes pracovat";
}

/* switch bys tu musel psat kazde cislo zvlast, fuuuuuuuuuuj */

echo "<h1> SWITCH lepsi nez IF </h1>";

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
?>