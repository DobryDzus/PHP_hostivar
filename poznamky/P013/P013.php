<?php

//php neprebira css
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];

    echo $jmeno;
}
?>