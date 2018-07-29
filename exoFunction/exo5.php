<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</h3>
<?php
function mixConcat($nb, $str){
    return $nb . $str . "\n";
}
echo mixConcat(17, " CRS me suivent");
?>
</body>
</html>