<?php
//vetveeni if

if (7 > 3) {
    //splnena podminka
    echo "jo";
} elseif (3 > 7) {
    "druha plati";
} else {
    echo "cokoliv jineho";
}
$a = 20;
$b = 11;
if ($a > $b or $b > $a) {
    echo "diky pouziti or staci, kdyz plati aspon jedna podminka";
} elseif ($a == 20 and $b == 11) {
    echo "jde videt pouze v pripade ze plati obe podminky";
}


//switch blablabla blebleble ha blublublublbulbublub

$volba = "a";

switch ($volba) {
    case 'a':
        "prvni pripad";
        break;
    
    default:
        "kdyz se nesplni ani jedno tak vyjede ts pmo";
        break;
}

//cyklusy

//for
for ($i=0; $i <= 5; $i++) { 
    echo "cislo:". $i.", ";
}


//for a pole
$pole = [];
for ($j = 0; $j < 5; $j++){
    $pole[$j]= $j + 1;
}
print_r($pole);



//foreach - pole, objekty
//foreach($pole/$objekt as $docasna_promenna)

foreach ($pole as $y){
    $y = $y * 2;
    echo $y;
}

//while a do while
echo "<br>";
$cislo = 10;

while ($cislo >= 1) {
    echo $cislo;
    $cislo = $cislo - 1;
}

echo "<br>";
$podminka = 1;
do {
    echo "godnota je ".$podminka;
    $podminka = $podminka - 1;
} while ($podminka > 1);

?>