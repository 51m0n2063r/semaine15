<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>PHP - Les paramètres d'URL ##Exercice 1 Faire une page index.php. <br>              
    Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br> 
    index.php?nom=Nemare&prenom=Jean</h3>
<?php
//isset() = Détermine si une variable ou élément de tableau est existant et est différente de NULL
if (isset($_GET["nom"], $_GET["prenom"])){
    echo "Bonjour " . $_GET["nom"] . " " . $_GET["prenom"] . "!";
} else {
    echo "Nom et Prénom non définit !";
}
?>
</body>
</html>