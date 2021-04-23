<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice06</title>
</head>
<body>
    <?php
     $num = rand(1,12);
     $mois = array( 1 =>'Janvier', 2 =>'Février', 3=>'Mars', 4 =>'Avril', 5 =>'Mai', 6 =>'Juin', 7=>'Juillet',8=>'aout',9=>'septembre',10=>'octobre',11=>'novembre',12=>'decembre');
     switch ($num) {
         case 1:
             echo 'Le mois'. $num .'correspond au mois de '.$mois[1];
         break;
         case 2:
              echo 'Le mois'. $num .'correspond au mois de '.$mois[2];
         break;
         case 3:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[3];
         break;
         case 4:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[4];   
         break;
         case 5:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[5];
         break;
         case 6:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[6];     
         break;
         case 7:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[7];             
         break;
         case 8:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[8];                 
         break;
         case 9:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[9];
         break;
         case 10:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[10];                  
         break;
         case 11:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[11];
         break;
         case 12:
            echo 'Le mois'. $num .'correspond au mois de '.$mois[12];
         break;
         
         default:
            echo 'Erreur';
         break;
     }
    ?>
</body>
</html>