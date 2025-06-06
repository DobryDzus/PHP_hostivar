<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$pripojeni_cteni = fopen("data.csv", "r");

while (($radek = fgetcsv($pripojeni_cteni)) == true) {
    echo "<tr>";
    foreach ($radek as $bunka) {
        echo "<td>" . htmlspecialchars($bunka) . "</td>";
    }
    echo "</tr><br>";

    
}
fclose($pripojeni_cteni);
?>

<body>

<table>

</table>

    <form action="" method="post">
        <label for="jmeno">Jméno</label>
        <input type="text" name="jmeno" id="">

        <label for="prijmeni">Příjmení</label>
        <input type="text" name="prijmeni" id="">

        <label for="narozeni">Datum narození</label>
        <input type="date" name="narozeni" id="">

        <label for="vzdelani">Datum narození</label>
        <input type="text" name="vzdelani" id="">

        <input type="submit" value="Odoslať">
    </form>
<?php
$pripojeni_zapis = fopen("data.csv", "a");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    $narozeni = $_POST["narozeni"];
    $vzdelani = $_POST["vzdelani"];

    $data = [$jmeno, $prijmeni, $narozeni, $vzdelani];

    if ($pripojeni_zapis == true) {
        foreach ($data as $polozka) {
            fputcsv($pripojeni_zapis, $polozka);
        }
    }
}

fclose($pripojeni_zapis);

?>
</body>
</html>