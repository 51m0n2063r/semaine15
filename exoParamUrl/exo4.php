<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/* ##Exercice 4 Faire une page index.php. 
Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
index.php?langage=PHP&serveur=LAMP */
if(isset($_GET['langage']) && ($_GET['serveur'])) {
    echo $_GET['langage'] . "\n" . $_GET['serveur'];
    }
    if(!isset($_GET['langage']) && ($_GET['serveur'])) {
    echo "Contient pas les bon paramètres";
    }
?>
</body>
</html>