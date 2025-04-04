<?php
$a = 5;
$b = 11;
$c = -3;

if ($a > $b and $a > $c) {
    echo "Hodnota proměnné A je nejvyšší";
} elseif ($b > $a and $b > $c) {
    echo "Hodnota proměnné B je nejvyšší";
} elseif ($c > $a and $c > $b) {
    echo "Hodnota proměnné C je nejvyšší";
} else {
    if ($a < $b and $a < $c) {
        echo "Hodnota proměnné A je nejnižší";
    } elseif ($b < $a and $b < $c) {
        echo "Hodnota proměnné B je nejnižší";
    } elseif ($c < $a and $c < $b) {
        echo "Hodnota proměnné C je nejnižší";
    }
}
?>