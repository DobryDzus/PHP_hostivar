<?php
//iterace pres pole nebo objekty, zakladni syntax slouzi k projeti vsech prvku v objektu nebo poli



$pole = [1, 5, 8, 9, 11, 22, 50, 71];

foreach ($pole as $item) {
    echo "hodnota promenne je ". $item. "<br>";
}

foreach ($pole as $item) {
    if ($polozka %2 == 0){
        $polozka +=1;
    }
}

print_r($pole)
?>