<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Avec le tableau de l'exercice 5, Afficher toutes les valeurs de ce tableau ainsi que les clés associés. <br>
Cela pourra être, par exemple, de la forme : <br>
"Le département" + nom_departement + "a le numéro" + num_departement</h3>
<?php
 $departements = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
];
foreach($departements as $key => $value)
{
echo "Le département de $value a le numéro $key. \n".'<br>';
}
?>
</body>
</html>
