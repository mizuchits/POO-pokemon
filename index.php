<?php 
include("Pokemon.php");
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
    $gobou = new pokemon('gobou', '100', 20, 'eau', 'false');
    $evoli = new pokemon('evoli', '100', 20,'normal', 'false');
    $gobou->arene($evoli, $gobou);
    ?>
     
</body>
</html>