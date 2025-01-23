<?php
$pocasi = $_POST["pocasi"];


if ($pocasi == "slunecno") {
    echo "jdi na prochajdu";
} elseif ($pocasi == "dest") {
    echo "ber destnik";
} elseif ($pocasi == "snih") {
    echo "ber mrkev a stav snehulaka";
} else {
    echo "nikam nechod";
}
?>