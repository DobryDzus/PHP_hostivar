<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .blok{
        background-color: #cc12aa;
        width: 50px;
        height: 50px;
    }

</style>
<body>
    <main>
        <?php
            for ($i=0; $i < 3; $i++) { 
                echo "<div class='blok'></div>";
            }
        ?>
    </main>
</body>
</html>
