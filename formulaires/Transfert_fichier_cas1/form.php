<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfert de fichier</title>
</head>
<body>

    <form method="post" action="form.php" enctype="multipart/form-data">
        <fieldset>
            <legend>
                <b>Transfert de fichier</b>
            </legend>
            <p>
                <label for="fichier">Transfert de fichier</label>
                <input id="fichier" type="file" name="fichier">
            </p>

            <p>c
                <input type="submit" name="fichier_transmis" value="ENVOYER">
                <input type="reset" value="EFFACER">
            </p>
        </fieldset>

    </form>

    <?php
        if(isset($_POST['fichier_transmis'])) {
            echo "<pre>";
            print_r($_FILES);
        }
    ?>
    
</body>
</html>