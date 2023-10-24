<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La boucle foreach</title>
</head>
<body>
<p> Ecrire un script PHP  qui stocke une liste de noms dans un tableau, puis 
    qui affiche ces noms
     dans une liste à puce
</p>

<?php 

    $nom = ["Naruto", "Asura", "Indra", "Sassuke", "Boruto", "Kawaki", "Jigen"];
    sort($nom);
    echo "<ul>";
    foreach($nom as $value) {
        echo "<li>".$value."<li>";
    }
    echo "</ul>";

?>
    
</body>
</html>