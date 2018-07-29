<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3></h3>
<?php
/* ##Exercice 2 Faire une page index.php. 
Tester sur cette page que le paramètre age existe 
et si c'est le cas l'afficher sinon le signaler : 
index.php?nom=Nemare&prenom=Jean */
if(isset($_GET['age'])) {
    echo $_GET['age'];
    }
    if(!isset($_GET['age'])) {
    echo "Ne contient pas ton age";
    }
?>
</body>
</html>