<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice05</title>
</head>
<body>
    <?php
        $nbr1=rand(1,100);
        echo '<p>Chiffre 1:'.$nbr1.'</p>';
        $nbr2=rand(1,100);
        echo '<p>Chiffre 2:'.$nbr2.'</p>';
        $value=$nbr1 - $nbr2;
        $absolue = abs($value);
        echo '<p>Absolue:'.$absolue.'</p>';
        if($absolue >= 25 && $absolue <=75){
            echo 'La valeur absolue de'.$nbr1.'-'.$nbr2.'est comprise entre 25 et 75';
        }
        else {
            echo 'La valeur absolue de'.$nbr1.'-'.$nbr2.'n\'est pas comprise entre 25 et 75';
        }
    ?>
</body>
</html>