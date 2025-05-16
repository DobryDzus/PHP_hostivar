<!DOCTYPE html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $pwd = $_POST['pwd'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if ($pwd == "abcd1234") {
    $loggedin = True;
}   else {
    echo "<h1>Špatné heslo</h1>";
}
    ?>
    <?php
        if ($loggedin ) :
    ?>
    <form action="" method="post">
        <label for="jmeno">Jméno</label>
        <input type="text" name="jmeno" id="">
        <label for="prijmeni">Příjmení</label>
        <input type="text" name="prijmeni" id="">
        <input type="submit" value="Odoslať">
    </form>
    <?php
        endif;
    ?>

    <?php
        $jmeno = $_POST["jmeno"];
        $prijmeni = $_POST["prijmeni"];

        if ($jmeno == "Pavel" and $prijmeni == "Petr") {
            echo "nazdar podvodniku";
        } elseif ($jmeno == "Petr" and $prijmeni == "Pavel") {
            echo "negramtoe";
        } else {
            echo "chyba";
        }
    ?>
</body>
</html>

