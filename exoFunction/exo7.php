<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<H3>Faire une fonction qui prend deux paramètres: age et genre. <br>
Le paramètre genre peut prendre comme valeur : <br>
    Homme <br>
    Femme <br>
La fonction doit renvoyer en fonction des paramètres :<br>
    Vous êtes un homme et vous êtes majeur<br>
    Vous êtes un homme et vous êtes mineur<br>
    Vous êtes une femme et vous êtes majeur<br>
    Vous êtes une femme et vous êtes mineur<br>
</H3>
<?php
function ageGenre($nb, $str){
    if ($str == "homme" && $nb >= 18){
        return "Vous êtes un homme et vous êtes majeur" . "\n";
    } elseif ($str == "homme" && $nb < 18){
        return "Vous êtes un homme et vous êtes mineur" . "\n";
    } elseif ($str == "femme" && $nb >= 18){
        return "Vous êtes une femme et vous êtes majeur" . "\n";
    } else {
        return "Vous êtes une femme et vous êtes mineur" . "\n";
    }
}
echo ageGenre(18, "homme");
echo ageGenre(34, "femme");
echo ageGenre(15, "femme");
echo ageGenre(7, "homme");
?>
</body>
</html>