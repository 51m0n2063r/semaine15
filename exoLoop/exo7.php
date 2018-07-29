<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>En allant de 1 à 100 avec un pas de 15,
afficher le message "On tient le bon bout"</h3>
<?php 
$bonBout = 1;
while ($bonBout <= 100) {
    echo $bonBout . " : On tient le bon bout" . "\n".'<br>';
    $bonBout = $bonBout+15;
}
?>
</body>
</html>