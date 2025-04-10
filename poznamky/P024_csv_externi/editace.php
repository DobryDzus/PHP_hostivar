<?php
$soubor = "data.csv";

//otevreni souboru pro zapis

$vypis = fopen($soubor, "w"); //mody viz. ahh.php

//zaloha dat pro ulozeni do csv

$zaloha = [
    ["id","jmeno","prijmeni","datum_narozeni","vzdelani","obcan_cr"],
    [1,"Ondra","Pacner","2004-12-27","Středoškolské s maturitou","True"],
    [2,"Davidos","Novákos","2000-12-27","Středoškolské s maturitou",True],
    [2,"Karlos","Benda","2024-12-27","Nedokončil základní",True]
];

if ($prepsani = true) {
    foreach ($zaloha as $radek) {
        fputcsv($prepsani, $radek);
    }
}
?>