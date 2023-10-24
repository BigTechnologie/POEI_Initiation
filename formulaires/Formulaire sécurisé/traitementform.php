<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement Formulaire</title>
</head>
<body>
    <?php

        if(isset($_POST['envoyer'])) {

            if(empty($_POST['nom'])) {
                echo "Veuillez saisir votre nom !";
            }else{
                $nom = strip_tags($_POST['nom']);

                echo "Le nom saisi par l'utilisateur est : $nom <br>";
            }

        }else {
            echo "Vous devez valider votre formulaire !";
        }
    ?>
</body>
</html>