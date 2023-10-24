<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
<p>Ecrire un script PHP qui defini une varible nom contenant votre nom et une variable
     age contenant votre âge. Ensuite, le script doit <br>
   afficher une message qui dit: "Bonjour[votre nom], vous avez [votre âge] ans !".
</p>

<?php
    $nom = "yanis";
    $age = 33;

    echo "Bonjour $nom, vous avez $age ans !";
    print_r($nom);
 ?>
</body>
</html>