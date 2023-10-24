<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method="post" action="traitementform.php">
        <fieldset>
            <legend>
                <b>Traitement du formulaire</b>
            </legend>
            <p>
                <label for="nom">Nom:</label>
                <input id="nom" type="text" name="nom" placeholder="Entrer votre nom" size= 50>
            </p>
            
            <p>
                <input type="submit" name="envoyer" value="ENVOYER">
                <input type="reset" value="EFFACER">
            </p>

        </fieldset>
    </form>
    
</body>
</html>