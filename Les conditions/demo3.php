<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Rediger un script conditionnel pour tester si un nombre est à la fois un multiple
    de 3 et de 5.
    </p>

    <?php
        $x = 7;
        if($x%3 == 0 AND $x%5 == 0) {
            echo $x. " est un multiple de 3 et de 5";
        }else{
            echo $x. " n'est pas multiple de 3 et de 5";
        }
    ?>
</body>
</html>