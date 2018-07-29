<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>fatiguée de faire les consigne en titre, je vais les collé directement en commentaire :) </h3>
<?php
/* ##Exercice 3 Faire une page index.php. 
Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
index.php?dateDebut=2/05/2016&dateFin=27/11/2016 */
if(isset($_GET['dateDebut']) && ($_GET['dateFin'])) {
    echo $_GET['dateDebut'] . "\n" . $_GET['dateFin'];
    }
    if(!isset($_GET['dateDebut']) && ($_GET['dateFin'])) {
    echo "Contient pas les bons paramètres";
    }
?>
</body>
</html>