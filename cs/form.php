<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
            $otevreni_cteni = fopen( "data.csv", "r");

            if ($otevreni_cteni == true) {
                while (($radek = fgetcsv($otevreni_cteni)) == true) {
                    echo "<tr>";
                    foreach($radek as $polozka){
                        echo "<td>".$polozka."</td>";
                    }

                }
            }
            fclose($otevreni_cteni);
        ?>
    </table>
</body>
</html>