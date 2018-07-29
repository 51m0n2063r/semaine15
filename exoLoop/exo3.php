<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h5>Créer deux variables.
Initialiser la première à 100.
Et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :
    multiplier la première variable avec la deuxième
    afficher le résultat
    décrémenter la première variables</h5>
<?php 
$num1 = 100;
$num2 = 20;
while ($num1 >= 10) {
    echo $num1 * $num2 ."\n".'<br>';
    $num1--;
}
?>
</body>
</html>