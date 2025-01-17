<?php
$vek = 0;

// u vetveni se najde vzdy prvni podminka, pak uz NEPOKRACUJE!

if ($vek > 18){//prvni podminka cs
    echo "ahoj ses plnolety";
} elseif ($vek == 18){ //pokud se nesplni podminka predtim
    echo "ahoj ses plnoletyy";
} else{
    echo "nejsi plnolety, jdi cs"; //pokud se nesplni zadna podminka predtim
}

echo "<br>";

//vice if

//kazde if je separatni 
if ($vek > 18){
    echo "prvni if";
}

echo "<br>";

if ($vek > 65){
    echo "vic jak 65, druhy if";
}

//if s vice podminkami

echo "<br>";

if($vek >= 20 and $vek <= 30){
    echo "tohle se vypise jen kdyz je mezi 20 a 30";
} elseif ($vek == 18 or $vek == 22 or $vek == 0){
    echo "kdyz se splni jedna podminka";
}

echo "<br>";

$puvod = "cesko";
$pohlavi = "zena";
$vek = "22";

echo "<h1>vnorena podminka</h1>";
echo "<br>";

if ($vek > 18 and $vek < 65){
    if ($pohlavi == "zena"){
        echo "cs zeno<br>";
        if ($puvod == "cesko"){
            echo "je to cech";
        } else{
            echo "cizinec lol";
        }
    } else{
        echo "cs muzi";
    }
} else{
    echo "too old nebo too young";
}

?>