<?php
/**
 * Les types de données
 * boolean(bool): boolean true ou 1 et false ou 0.
 * integer (int) : nombre entier.
 * float: nombre réels.
 * string : chaines de caractères( placées entre "" ou '').
 * array : tableaux
*/

// Appliquons quelques opérations 

$a = 16;
$ba = 4;

echo $a + $ba;
echo "\n";
echo $a-$ba;
echo "\n";
echo $a*$ba;
echo "\n";
echo $a/$ba;
echo "\n";
echo $a%$ba;

echo "\n";
// Les operations de comparaison

$c = 4;
$d = 7;
echo $c>$d;

// La concatenation
$e = "BON";
$f = "JOUR";
echo $e.$f;