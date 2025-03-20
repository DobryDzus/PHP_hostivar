<?php
$n = 10; // pocet opakovani
$fib1 = 0; // prvni cislo
$fib2 = 1 ;// druhe cislo

$i = 0;

while ($i < $n){
    echo $fib1." "; //vypis aktualniho cisla
    
    $dalsiF = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $dalsiF;
    $i+=1;
}
?>