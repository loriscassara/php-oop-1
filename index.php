<?php
    require __DIR__ . './Models/Dati.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Welcome</title>
</head>
<body>
    <?php
        /*
        var_dump($avatar);
        var_dump($deadpool);
        var_dump($venom);

        echo $avatar->getDescription() . "<br>";
        echo $deadpool->getDescription() . "<br>";
        echo $venom->getDescription();
        */

        var_dump($movies);

        foreach($movies as $film){
            echo $film->getDescription();
            echo "<br>";
        }

    ?>
</body>
</html>