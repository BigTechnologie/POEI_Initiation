<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La boucle foreach</title>
</head>
<body>

<?php

    $fruits = [
        "pomme" => 2.5,
        "Banane" => 2.0,
        "Orange" => 3.2,
        "Kiwi" => 4.0,
        "Ananas" => 3.5 
    ];

    foreach($fruits as $key => $prix) {
        echo "Le prix de : ".$key. " est de ".$prix." euros. <br>"; 
    }

?>
    
</body>
</html>