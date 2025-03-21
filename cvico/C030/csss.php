<?php
$pole = [0];
for($i = 0; $i < 5000; $i++){
    
    if ($i % 7 == 0){
        $pole[$j]=$i;
        $j++;
    }
}
foreach ($pole as $x) {
    if ($x %2 == 0){
        echo $x. "<br>";
    }
}

?>