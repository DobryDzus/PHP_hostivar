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
        <label for="cislo1">Zadej číslo</label>
        <input type="number" name="cislo1" id="">
        <label for="operator">Vyber operátor</label>
        <select name="operator" id="">
            <option value=""></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <label for="cislo2">Zadej druhé číslo</label>
        <input type="number" name="cislo2" id="">

        <input type="submit" value="odoslat">
    </form>
    <?php
    $cislo1 = $_POST["cislo1"];
    $operator = $_POST["operator"];
    $cislo2 = $_POST["cislo2"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($operator == "/" and $cislo2 == 0) {
            echo "ses dement";
        }
        switch ($operator) {
            case '+':
                echo $cislo1 + $cislo2;
                break;
            case '-':
                echo $cislo1 - $cislo2;
                break;
            case '*':
                echo $cislo1 * $cislo2;
                break;  
            case '/':
                echo $cislo1 / $cislo2;
                break;      
            default:
                echo "neco je spatne";
                break;
        }
}
?>
</body>
</html>