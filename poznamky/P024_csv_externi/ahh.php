<?php
// opravneni souboru
// read - cteni -- r
// write - prepsat -- w
// execute - spustit -- e
// append - pridat -- a

$soubor = "data.csv";

//otevreni souboru pro zapis

$vypis = fopen($soubor, "r"); // docasna promenna, do ktere je ulozena informace, ze je soubor pripojeny pro cteni 
// fopen(cesta_k_souboru, prava)

// kontrola jestli je soubor dobrej
if ($vypis !== false) {
    echo "<table border=1>";
    echo "<tr>
    <th>ID</th>
    <th>jmeno</th>
    <th>prijmeni</th>
    <th>datum_narozeni</th>
    <th>vzdelani</th>
    <th>obcan_cr</th>
    ";

    //cteni
    while (($radek = fgetcsv($vypis)) == true) {
        //fgetcsv loaduje data do php souboru
        echo "<tr>";
        foreach ($radek as $bunka) {
            echo "<td>" . htmlspecialchars($bunka) . "</td>";
        }
        echo "</tr>";

        
    }
    echo "</table>";
    //ukonceni pripojeni souboru
    fclose($vypis);
}
?>