<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];

    $heslo = $_POST["heslo"];

}

$kontrola_l = "ahoj";
$kontrola_h = "1234";

if ($login == $kontrola_l && $heslo == $kontrola_h) {
    header("Location: mainpage.php");
    exit;
} else {
    header("Location: formularos.html");
    exit;
}

?>