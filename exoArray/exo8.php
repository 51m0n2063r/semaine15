<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>/Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</h3>
<?php
include("exo1.php");
foreach ($mois as $month_count){
    echo $month_count . "\n".'<br>';
}
?>
</body>
</html>