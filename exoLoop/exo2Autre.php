<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
$x = 0;
$y = 20;

do{
  echo '$x contient la valeur: ' .$x. '<br>';
  $x++;
}
while($x <= 20);

do{
  echo '$y contient la valeur: ' .$y. '<br>';
  $y++;
}
while($y <= 5);
?>
</body>
</html>