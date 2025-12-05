<?php
echo "operatore ternario condizionale";
$x = 5;
$risultato = $x > 6 ? "OK" : "NO OK";
echo "<br>";
echo $risultato;
echo "<br>";

echo "operatore coalescing";
$nome = null;
$risultato2 = $nome ?? "default";   //ritorna default se nome è null o inesistente
echo "<br>";
echo $risultato2;
echo "<br>";

echo "operatore spaceship";
$x = 5;
$y = 6;
echo "<br>";
echo $x <=> $y; //sinistra +piccolo = -1    destra +piccolo = 1    sinistra = destra = 0
