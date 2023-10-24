<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>
<body>
    
    <?php
    // if = si
        $nombre = 8;
        if($nombre > 0) {
            echo "Le nombre est positif";
        }elseif($nombre < 0) { // si non si
            echo "Le nombre est négatif";
        }else { // si non
            echo "Le nombre est nul";
        }
    ?>
    
</body>
</html>