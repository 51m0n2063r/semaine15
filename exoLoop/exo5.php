<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>En allant de 1 à 15 avec un pas de 1,
afficher le message "On y arrive presque"</h3>
<?php 
$presque = 1;
while ($presque <= 15) {
    echo $presque . " : On y arrive presque" . "\n".'<br>';
    $presque++;
}
?>
</body>
</html>