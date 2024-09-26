<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>promenne</title>
</head>
<body>
    <h1>datove typy bleeeeh</h1>
    <table border="1">
        <tr>
            <th>datovy typ</th>
            <th>popis</th>
            <th>priklad zapisu</th>
            <th>deklarace promenne</th>
        </tr>
        <tr>
            <td>string</td>
            <td>text</td>
            <td>"ahoj php fuj"</td>
            <td>$text = "ahoj php fuj";</td>
        </tr>
        <tr>
            <td>integer</td>
            <td>cele cislo</td>
            <td>42</td>
            <td>$cislo = 42;</td>
        </tr>
        <tr>
            <td>float</td>
            <td>desetinne cislo</td>
            <td>42.2</td>
            <td>$desetinne_cislo = 42.2;</td>
        </tr>
        <tr>
            <td>boolean</td>
            <td>pravdivost</td>
            <td>True/False</td>
            <td>$pravda = true;</td>
        </tr>
        <tr>
            <td>array</td>
            <td>pole hodnot</td>
            <td>[1, 2, 3]</td>
            <td>$pole = array(1, 2, 3);</td>
        </tr>
        <tr>
            <td>NULL</td>
            <td>nema hodnotu </td>
            <td>null</td>
            <td>$hodnota = null;</td>
        </tr>
    </table>
    <?php
    $text = "ahoj php fuj";
    echo "<br>";
    echo $text;

    $cislo = 42;
    echo "<br>";
    echo "<br>";
    echo $cislo;

    $desetinne_cislo = 42.2;
    echo "<br>";
    echo "<br>";
    echo $desetinne_cislo;

    $pravda = true;
    echo "<br>";
    echo "<br>";
    echo $pravda;

    $pole = array(1, 2, 3);
    echo "<br>";
    echo "<br>";
    echo $pole;

    $hodnota = null;
    echo "<br>";
    echo "<br>";
    echo $hodnota;

    //prace s promennymi a operatori

    echo "<h2>operatory</h2>"; //MUZOU SE POUZIVAT I S PROMENYMMI
    //scitani [+]
    $scitani = 5 + 9;

    //odcitani [-]
    $odcitani = 5 - 9;

    //nasobeni [*]
    $nasobeni = 5 * 9;

    //deleni [/]
    $deleni = 5 / 9;

    //modulo [%] ZBYTEK PO DELENI
    $modulo = 5 % 9;

    //exponent [**]
    $exponent = 5 ** 9;

    //spojeni retezcu promennych a hodnot [.]
    echo "thle je ukazka spojeni text a promenne ".$nasobeni." tohle je dalsi text";
    ?>



</body>
</html>