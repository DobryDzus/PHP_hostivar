<?php
$jmeno = $_POST["jmeno"];
$prijmeni = $_POST["prijmeni"];
$pohlavi = $_POST["pohlavi"];
$datumnar = $_POST["datumnar"];
$zabezpeceno = $_POST["zabezpeceno"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <h1>Zkontrolujte údaje</h1>
    Jméno: <?php echo $jmeno ?> <br>
    Příjmení: <?php echo $prijmeni ?> <br>
    Pohlaví: <br>
    Datum narození: <?php echo $datumnar ?> <br>
    </p>
    <?php if ($zabezpeceno == True) {
        echo "<img src='images/kocka.jpg'>";
    }
    ?>
</body>
</html>