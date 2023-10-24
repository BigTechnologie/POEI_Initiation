<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method="" action="traitementform.php">
        <fieldset>
            <legend>
                <b>Traitement du formulaire</b>
            </legend>
            <p>
                <label for="nom">Nom:</label>
                <input id="nom" type="text" name="nom" placeholder="Entrer votre nom">
            </p>
            <p>
                <label for="email">Email:</label>
                <input id="email" type="email" name="email" placeholder="Enter votre email">
            </p>
            <p>
                <label for="profession">Profession:</label>
                <select name="profession" id="profession">
                    <option value="Enseignant">Enseignant</option>
                    <option value="Développeur Web">Développeur Web</option>
                    <option value="Ingénieur">Ingénieur</option>
                </select>
            </p>
            <p>
                <input type="submit" name="envoyer" value="ENVOYER">
                <input type="reset" value="EFFACER">
            </p>

        </fieldset>
    </form>
    
</body>
</html>