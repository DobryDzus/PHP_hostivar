<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="mesic">vyber mesic</label>
        <select name="mesic" id="">
            <option value=""></option>
            <option value="1">Leden</option>
            <option value="2">Únor</option>
            <option value="3">Březen</option>
            <option value="4">Duben</option>
            <option value="5">Květen</option>
            <option value="6">Červen</option>
            <option value="7">Červenec</option>
            <option value="8">Srpen</option>
            <option value="9">Září</option>
            <option value="10">Říjen</option>
            <option value="11">Listopad</option>
            <option value="12">Prosinec</option>
        </select>

        <input type="submit" value="odoslat">
    </form>

    <?php
        $mesic = $_POST["mesic"];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($mesic == 12 or $mesic == 1 or $mesic == 2) {
                echo "Zima";
            } elseif ($mesic == 3 or $mesic == 4 or $mesic == 5) {
                echo "Jaro";
            } elseif ($mesic == 6 or $mesic == 7 or $mesic == 8) {
                echo "Léto";
            } elseif ($mesic == 9 or $mesic == 10 or $mesic == 11) {
                echo "Podzim";
            } else {
                echo "Něco je špatně";
            }
        }
    ?>
</body>
</html>