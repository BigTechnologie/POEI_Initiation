<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La boucle forach</title>
</head>
<body>
<p>Ecrire un tableau multidimensionnel associatif dont les clés <br> sont des noms 
   de personnes et les valeurs sont des tableaux numérotés <br>
   contenant le nom, la ville et l'âge de la personne. <br>Puis utiliser ce tableau
   pour afficher pour chacune de ces personnes <br> une phrase mentionnant le nom et 
   le prenom de la personne ainsi que son âge.<br>
   Avec la fonction print_r afficher les informations du tableau.
</p>

<?php 

    $tableau = [
        "Robert" => ["Jean", "Marseille", 25],
        "Bruno" => ["Mohamed", "Bordeaux", 23],
        "Durand" => ["Bastien", "Toulouse", 19]

    ];

    foreach($tableau as $nom => $tab) {
        //echo "L'age de $nom $tab[0] est: $tab[2] <br>";
        print_r($tableau);
    }

?>
    
</body>
</html>