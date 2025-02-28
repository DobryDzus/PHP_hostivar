<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radek = $_POST["radek"]; 

        $sloupec = $_POST["sloupec"];
    
    }
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
    .radek{
        display: flex;  
        padding: 10px;
        background-color: white;
        justify-content: space-evenly;
        margin: 10px;
        height: 20vh;
        align-items: center;
    }

    .blok{
        background-color: white;
        width: 200px;
        height: 200px;
        border: 5px solid black
    }
</style>
<body>
        <main>


        <?php
        $radky = array_fill(0, $radek, array_fill(0, $sloupec, ''));

        foreach ($radky as $radek) {
            echo "<div class='radek'>";
            foreach ($radek as $blok) {
                echo "<div class='blok'><p><strong>Předčasný odchod</strong></p>Jméno: <br><br>Datum:<br>Třída:<br>Podpis TU:</div>";
            }
            echo "</div>";
        }
        ?>
    </main>
</body>
</html>