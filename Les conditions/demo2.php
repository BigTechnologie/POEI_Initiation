<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Ecrire un programme pour vérifier le développement de compétances des élèves 
évalués sur une échelle de 100 utilisant les instructions 
conditionnelles. <br> . Si le degré de compétance est de 80% ou plus, l'élève sera 
du premier groupe. <br> . Si le dégré de compétance est 
comprise entre 50% et 80%, l'élève sera du deuxième groupe. <br> Si le degré de
 compétance est comprise entre 30% et 50%, lélève sera 
du troixième groupe. <br> Si le degré de compétance est inférieur à 30%, l"élève sera
 en échec.
</p>

<?php
    $competance_eleve = 70; // Par defaut

    if($competance_eleve >= 80) {
        $groupe = "Groupe 1";
    }elseif($competance_eleve >= 50) {
        $groupe = "Groupe 2";
    }elseif($competance_eleve >=30) {
        $groupe = "Groupe 3";
    }else{
        $groupe = "Ehec";
    }

    echo "Le Groupe d'affectation de l'élève est : $groupe";
    
?>
    
</body>
</html>