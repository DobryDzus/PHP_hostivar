<?php
    require "C013-data.php";
?>
<!-- https://github.com/DobryDzus -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- https://github.com/DobryDzus -->
    <style>
        body{
            color: <?php echo $barva;?>
        }

    </style>
</head>
<body>
    <?php
        if ($loggedin) :
    ?>
    <h1>obsah stranecky</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit sit ipsum inventore cupiditate nostrum praesentium quod voluptatum ducimus voluptates pariatur, assumenda esse perferendis veritatis aperiam dicta labore ab iste ea!</p>

    <?php
        else :
    ?>
    <h1>prihlas se bambulo</h1>

    <?php
        endif
    ?>
</body>
</html>
<!-- https://github.com/DobryDzus -->