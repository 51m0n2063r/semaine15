<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>En allant de 20 à 0 avec un pas de 1,
afficher le message "C'est presque bon"</h3>
<?php 
$presqueBon = 20;
while ($presqueBon >= 0) {
    echo $presqueBon . " : C'est presque bon" . "\n".'<br>';
    $presqueBon--;
}
?>
</body>
</html>