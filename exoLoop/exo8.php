<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h3>En allant de 200 à 0 avec un pas de 12,
afficher le message Enfin !!!!</h3>   
<?php
$enfin = 200;
while ($enfin >= 0) {
    echo $enfin . " : Enfin !!!!" . "\n".'<br>';
    $enfin = $enfin-12;
}
?>
</body>
</html>