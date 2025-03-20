<?php
//opakuje dokud neni 6
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}

echo "<br>";

//zastavi kdyz nastane 3
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

echo "<br>";

//do while nechapu nazdar bazar

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
?>