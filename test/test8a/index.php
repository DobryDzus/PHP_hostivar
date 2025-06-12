<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
    <?php
        $otevreni = fopen("data.csv", "r");

        if ($otevreni !== false) {
            while ($radek = fgetcsv($otevreni)) {
                foreach ($radek as $vystup) {
                    echo "<li>".$vystup."</li>";    
                }
            }
        }


        fclose($otevreni);
    ?>
    </ol>
</body>
</html>