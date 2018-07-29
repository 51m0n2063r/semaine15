<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</h3>
<?php
function concatString($str1, $str2){
    return $str1 . $str2 . "\n";
}
echo concatString("Jean", " Michel");
?>
</body>
</html>