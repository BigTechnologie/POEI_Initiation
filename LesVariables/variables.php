<?php 
    /**
     * Toujours précédé d'un signe $ et d'un ;
     * $a = 3;
     * Affectation: $nom = "Dawan";
     * Respectez la tradition : nommez les en camel case=> Exemple: $tauxDeTva=19.6;
     */

     // QUELQUES OPERATIONS SUR LES VARIABLES 
     echo "EXPLE1\n";

     $note1 = 10;
     $note2 = 12;
     echo ($note1 + $note2)/2;
    //----------------------------------------------------------------------------//
    echo "\n";
    echo "EXPLE2\N";
    
    $prenom = "Rachid";
    $nom = "Menut";
    $note1 = 10;
    $note2 = 20;
    $moyenne = ($note1 + $note2)/2;
    // Afficher la phrase: Bonjour prenom $nom vous avez eu ....... de moyennes.
    echo "\n";

    echo 'Bonjour ' . $prenom . ' '. $nom . 'vous avez eu' .' ' . (($note1 + $note2)/2) . 'de moyenne'; 

?>  