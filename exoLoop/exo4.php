<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :
    l'afficher,
    l'incrementer de la moitié de sa valeur</h1> 
<?php 
$num = 1;
while ($num < 11) {
    echo $num . "\n".'<br>';
    $num = $num+$num/2;  
}
?>
</body>
</html>