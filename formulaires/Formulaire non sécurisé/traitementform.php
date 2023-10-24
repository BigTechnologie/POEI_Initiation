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

            if (empty($_POST['nom'])) {
                echo "Veuillez saisir votre nom !";
            }elseif(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo "Veuillez saisir votre email !";
            }elseif(empty($_POST['profession'])) {
                echo "Veuillez sélectionner votre profession !";
            }else{
                $nom = $_POST['nom'];      // On recupère les données
                $email = $_POST['email'];
                $profession = $_POST['profession'];

                echo "Le nom saisi par l'utilisateur est: $nom <br>";
                echo "L'email saisi par l'utilisateur est: $email <br>";
                echo "La profession de l'utilisateur est: $profession <br>";
            }

        }else {
            echo "Vous devez valider votre formulaire !";
        }
    ?>
    
</body>
</html>