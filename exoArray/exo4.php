<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Exercice 4 Avec le tableau de l'exercice 1, <br> 
modifier le mois de aout pour lui ajouter l'accent manquant. </h3>
<?php
$mois = ['janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre'];
$mois[7] = 'août';
echo $mois[7]. "\n";
?>
</body>
</html>