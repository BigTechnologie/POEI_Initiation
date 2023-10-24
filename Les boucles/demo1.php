<?php
/* Une boucle est le fait de répéter plusieurs fois la même action tant qu'une 
condition est vérifiée.*/

// La boucle while(tant que)

$nb = 1;
while ($nb <= 100){
    echo $nb;
    echo "\n";
    $nb++;

}

// La boucle do....while(faire...tant que)
$x =1;

do{
    echo "Le nombre est: $x <br>";
    $x++;
}while($x <= 5);

// La boucle for(pour);
//Trouver le produit de tous les nombres de 1 à 20

$produit = 1;
for($i =1; $i <= 5; $i++) {
    $produit= $produit*$i;
}
echo "Le produit de tous les nombres de 1 à 20 est : $produit";