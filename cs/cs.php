<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="jmeno">jmeno</label>
        <input type="text" name="jmeno" id="" placeholder="jmeno">
        <input type="text" name="prijmeni" id="">
        <input type="email" name="email" id="">
        <textarea name="zprava" id=""></textarea>
        <input type="submit" value="Odeslat">
    </form>
</body>
</html>


<?php
$cena = 200;
$cena = 200 +50;


$pole = ["jablko", "hruška", "jablko", "pomeranč", "hruška"];

print_r(array_unique($pole));

echo implode(",", $pole);

echo "<br>". implode(", ", $pole);

$vek = 18;

if ($vek >= 18){
    echo "Jste dospělý/á.";
} else {
    "Jste mladší než 18 let.";
}


$cislo = 10;

if ($cislo > 0){
    echo "kladne";
} elseif ($cislo < 0){
    echo "zaporne";
} elseif ($cislo == 0){
    echo "nula";
}

$pocasi = "slunce";

switch ($pocasi) {
    case "slunce":
        echo "Jdi na procházku.";
        break;
    case "déšť":
        echo "Vezmi si deštník.";
        break;
    default:
        echo "Zůstaň doma.";
        break;
}

$x = 1;
$y = 71;
$pole2 = [];

for ($i=$x; $i < $y; $i++) { 
    $pole2[$i] = $i;
}
print_r($pole2);

$cislo = 1;
$soucet = 0;

while ($cislo <= 10) {
    echo $cislo;
    $soucet = $soucet + $cislo;
    $cislo = $cislo + 1;
    
}
echo "<br>".$soucet;


?>