<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner : <br>
    -Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième <br>
    -Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième <br>
    -Les deux nombres sont identiques si les deux nombres sont égaux</h3>
<?php
function compare($nb1, $nb2){
  if ($nb1 > $nb2){
      return $nb1 . " est plus grand que " . $nb2 . "\n".'<br>';
  } elseif ($nb1 < $nb2){
      return $nb1 . " est plus petit que " . $nb2 . "\n".'<br>';
  } else {
      return $nb1 . " est indentique à " . $nb2 . "\n".'<br>';
  }
}
echo compare(18, 5);
echo compare(4, 12);
echo compare(25, 25);
?>
</body>
</html>