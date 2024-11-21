<?php

//tady pisu kdyz chci zpracovat kod pri spusteni stranky - login, omezeni, redirect

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
    
    <h1>variables v php > html</h1>

    <?php
        $jmeno = "ondra";
        $prijmeni = "pacner";
    ?>

    <h2>
        <?php
        echo "ahoj ".$jmeno. " ". $prijmeni;
        ?>
    </h2>

</body>
</html>
<?php

//tady kdyz chci zpracovat kod po spusteni stranky - odeslani frm, zpracovani dat, double check, redirect

?>