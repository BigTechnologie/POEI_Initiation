<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO2</title>
</head>
<body>
<p>Ecrire un programme PHP qui stock le prix d'un produit dans une variable $prix,
 une quantité dans une variable $quantité et qui calcule <br>
 et affiche le montant total de la commande en euros.
</p>

<?php 
    $prix = 20;
    $quantité = 2;

    $total_commande = $prix * $quantité;
    echo "Le montant total de la commande est de: $total_commande euros";
?>
    
</body>
</html>