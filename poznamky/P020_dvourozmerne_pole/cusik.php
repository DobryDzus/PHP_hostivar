<?php
$dvadpole =[    [1, 2, 3], 
                [4, 5, 6], 
                [7, 8, 9],
            ];

print_r($dvadpole);

$dvojpole = []; //nelze deklarovat 2d pole primo, musi se resit cyklem

for ($i=0; $i < 5 ; $i++) { 
    $dvojpole[$i] = [];
    for ($j=0; $j < 5 ; $j++) { 
        $dvojpole[$i][$j] = 0;
    }
}

print_r($dvojpole);
?>