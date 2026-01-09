<?php 
include("pokemon.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $gobou = new pokemon('gobou', '50', 10, 'eau', 'false');
    $evoli = new pokemon('evoli', '50', 10,'normal', 'false');
    $gobou->arene($evoli, $gobou);
    ?>
     
</body>
</html>