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
        background-color: #cc11ff;
        justify-content: space-evenly;
        margin: 10px;
        height: 33vh;
        align-items: center;
    }
    .blok{
        background-color: #cc12aa;
        width: 50px;
        height: 50px;
        border: 1px solid black
    }

</style>
<body>
    <main>
        <?php
            for ($i=0; $i < $radek; $i++) { 
                echo "<div class='radek'>";
                for ($j=0; $j < $sloupec; $j++) { 
                    echo "<div class='blok'></div>";
                }
                echo "</div>";
            }
        ?>
    </main>
</body>
</html>