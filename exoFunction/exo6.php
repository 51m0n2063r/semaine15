<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Faire une fonction qui prend trois paramètres : nom, prenom et age. <br>
 Elle doit renvoyer une chaine de la forme : <br>
 "Bonjour" + nom + prenom + ",tu as" + age + "ans".</h3>
<?php
function tapasdit($str1, $str2, $nb){
    return "Bonjour " . $str1 . " " . $str2 . ",tu as " . $nb . " ans." . "\n";
}
echo tapasdit("Jean", "Michel", 78);
?>
</body>
</html>