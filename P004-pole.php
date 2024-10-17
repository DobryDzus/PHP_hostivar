
<?php

//deklarace datoveho typu pole
$pole = array("jabko", "hruska", "vitek");

print_r($pole); //vypis array 


echo "<br>";
echo "<br>";


echo $pole[2]; //vypise konkretni polozku ; pozice nula je prvni


echo "<br>";
echo "<br>";


$pole[] = "vanmax23"; // prida polozku do array
print_r($pole);


echo "<br>";


$pole[0] = "yehorek"; // prida na konkretni pozici (das do zavorky cislo), pokud tam uz nejaka byla, tak ji prepise :(
print_r($pole);

echo "<br>";

$vicerozmernepole = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

print_r($vicerozmernepole);

echo "<br>";
echo "<br>";

//-----------------------------------------------------------------------------------------

// prikazy pro manipulaci s polem
// vsechno nad timhle, nechce se mi to psat znovu

echo count($pole); // vypise pocet pozic v poli ; konecnce neco zajimavyho

echo "<br>";

$ciselnepole = array(1,2,3); // soucet pozic v arrayi
echo array_sum($ciselnepole );

echo "<br>";

$vysledek = array_sum($ciselnepole) / count($ciselnepole); // vypocet prumeru

echo $vysledek; // vypsani promenne prumeru

echo "<br>";



?>