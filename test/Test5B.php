<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="jidlo">Vyber jídlo</label>
        <input type="number" name="jidlo" id="" required>
        <input type="submit" value="Odoslať">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jidlo = $_POST["jidlo"];

        if ($jidlo <= 0 or $jidlo >= 6) {
            echo "Neplatný výběr";
        } 

        switch ($jidlo) {
            case 1:
                echo "Vybral sis svíčkovou";
                break;
            case 2:
                echo "Vybral sis řízek s bramborem";
                break;
            case 3:
                echo "Vybral sis špagety Carbonara";
                break;
            case 4:
                echo "Vybral sis vegetarianský salát";
                break;
            case 5:
                echo "Vybral sis guláš s knedlíkem";
                break;
            default:
                break;
        }
    }
    ?>
</body>
</html>