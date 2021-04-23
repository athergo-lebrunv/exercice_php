<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice04</title>
</head>
<body>
<?php
    echo '<h1>Exercice 04</h1>';
    $nbr = rand(1,20);
    echo'<h3>Le nombre tiré au sort est '.$nbr.'</h3>';
    if ($nbr >= 1 && $nbr<=5)
    {
        echo"Le nombre est compris entre 1 et 5";
    } elseif($nbr >= 6 && $nbr<=10) {
        echo"Le nombre est compris entre 6 et 10";
    } elseif($nbr >= 10 && $nbr<=15){
        echo"Le nombre est compris entre 10 et 15";
    }
    else
    {
        echo"Le nombre est compris entre 15 et 20";
    }



?>
</body>
</html>
