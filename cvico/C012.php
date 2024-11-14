<?php

$a = 5;
$b = 10;
$datum = date("l");

$vysledek = $a + $b

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>
        <?php
            echo "soucet cisel 5 a 10 je ".$vysledek;
        ?>

    </span>
<br>
    <span>
        Dneska je <?php echo $datum; ?>
    </span>

</body>
</html>