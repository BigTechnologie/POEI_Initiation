<?php
/*
$valeurs = [18, 20, "Dawan"];
//$valeurs = array(18, 20, "Dawan");// Autrement
echo $valeurs[2];

// Appliquons les fonctions PHP sur les tableaux

echo "\n";
*/
$nom = ["cedric", "lina", "william", "alice"];
//print_r($nom);
array_push($nom, "damin");
print_r($nom);

echo "\n";

// Les tableaux associatifs et multidimensionnels

$class = [
    [
    'nom'=>'vidoni',
    'prenom'=>'valerie',
    'poste'=>'Responsable chargée de récrutement',
    'notes'=>[16,14,19]
    ], [
        'nom' =>'Merking',
        'prenom'=>'Jérôme',
        'poste'=>'Directeur',
        'notes'=> [18,16,17]
    ]
];
echo $class[1]['notes'][0];

echo "\n";
// Autre façon de créer les tableaux

$produit["nom"] = "PC";
$produit["marque"] = "HP";
$produit["date_création"] = 2023;
$produit["Entreprise"] = "Dawan";

print_r($produit);

//Les tableaux multidimensionnels. Tableaux à 2 dimensions (colonnes et lignes).

// Pour chaque pays [FRANCE, CANADA, USA, ESPAGNE], afficher son nom, une ville et un code
// postal de la ville

$pays = []; // initialisation

$pays[0][0] = "FRANCE";
$pays[0][1] = "Paris";
$pays[0][2] = "71";

$pays[1][0] = "CANADA";
$pays[1][1] = "otawa";
$pays[1][2] = "55";

$pays[2][0] = "USA";
$pays[2][1] = "New York";
$pays[2][2] = "88";

$pays[3][0] = "ESPAGNE";
$pays[3][1] = "MADRID";
$pays[3][2] = "47";

print_r($pays);



