<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <?php
            $file = fopen("data.csv", "r");

            if ($file !== false) {
                while(($radek = fgetcsv($file)) !== false){
                    echo "<tr>";
                    foreach ($radek as $klic) {
                        echo "<td>".$klic."</td>";  
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>