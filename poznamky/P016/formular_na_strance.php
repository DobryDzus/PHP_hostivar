<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> <!--kdyz je action bez hodnoty, php bezi tady-->
        <label for="pocasi">Vyber počasí</label>
        <select name="pocasi" id="">
            <option value=""></option>
            <option value="slunecno">Slunečno</option>
            <option value="dest">Déšť</option>
            <option value="snih">Sníh</option>
            <option value="jine">Jiné</option>
        </select>
        <input type="submit" value="Odoslať">
    </form>
    <?php
    $pocasi = $_POST["pocasi"];
    /*    if ($_SERVER["REQUEST_METHOD"] == "POST") {} MUSI SE POUZIVAT U SINGLE PAGE FORMULARE */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($pocasi == "slunecno") {
            echo "jdi na prochajdu";
        } elseif ($pocasi == "dest") {
            echo "ber destnik";
        } elseif ($pocasi == "snih") {
            echo "ber mrkev a stav snehulaka";
        } else {
            echo "nikam nechod";
        }
}
    ?>
</body>
</html>