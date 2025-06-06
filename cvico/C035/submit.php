<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="jmeno">Jméno</label>
        <input type="text" name="jmeno" id="" required>

        <label for="prijmeni">Příjmení</label>
        <input type="text" name="prijmeni" id="" required>

        <label for="vek">vek</label>
        <input type="number" name="vek" id="" required min="1">

        <input type="submit" value="Odoslať">

    </form>
</body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    $vek = $_POST["vek"];

    $pripojeni_zapis = fopen("data.csv", "a");

    $data = [$jmeno, $prijmeni, $vek];

    fputcsv($pripojeni_zapis, $data);
    }
?>
</html>