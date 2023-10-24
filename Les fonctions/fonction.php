<?php
// On déclare une fonction avec le mot clé function()

function bonjour($nom) {
    echo 'Bonjour ' . $nom . "\n"; // Ici on affiche un resultat
}

bonjour('Ludovic');
bonjour('Damien');

//...............................................................................//
echo "\n";
// En stockant les resultats dans une variable
// return retourne le resultat lorsqu'une fonction est excécutéé.

function salutation($nom) {
    return 'salutation la ' . $nom . "\n"; // Ici on retourne un resultat
}

$Bonjour = salutation('FRANCE');
echo $Bonjour;

//-------------------------------------------------------------------------------//
echo "\n";

// Attribution de valeur au parametre en amont

function hello($nom = 'Alexandre legrand') {
    return 'salutation' . $nom . "\n";
}

$Bonjour = hello();
echo $Bonjour;

//---------------------------------------------------------------------//
echo "\n";

// Utilisation des conditions dans les fonctions

function saluer($nom = null) {
    if ($nom === null) {
        return "Bonjour\n";
    }
    return 'Bonjour ' . $nom . "\n";
}

$Bonjour = saluer();
echo $Bonjour;
echo saluer('Dawan');

//----------------------------------------------------------------------//
echo "\n";

/* Contexte exterieur des fonctions(les fonctions n'ont pas accès à un contexte 
exterieur => cas de la portée des variables) */

$nom = "France";

function merci($prenom = null, $nom = null) {
    if($prenom === null) {
        return "Bonjour\n";
    }
    return 'Bonjour ' . $prenom . " " . $nom . "\n";
}

echo merci('Rachid', $nom);

//--------------------------------------------------------------------------//
echo "\n";
class Dawan {
    private $etudiants = [
        [
            'nom' => 'cedric',
            'note' => 20,
            'moyenne' => 15
        ],
        [
            'nom' => 'william',
            'note' => 18,
            'moyenne' => 13
        ],
        [
            'nom' => 'sonia',
            'note' => 10,
            'moyenne' => 8  
        ]
    ];

    private function filterFonction($etudiant) {
        return $etudiant['moyenne'] < 10;
    }

    public function bonEtudiants() {
        return array_filter($this->etudiants, [$this, 'filterFonction']);
    }
}

// Si on souhaite utilisé la class Dawan, con fait ceci:
$dawan = new Dawan(); // Instantiation de la class Dawan pour pouvoir l'utiliser
var_dump($dawan->bonEtudiants());
