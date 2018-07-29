<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/* ##Exercice 6 Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index.php?batiment=12&salle=101 */
if(isset($_GET['batiment']) && ($_GET['salle'])) {
    echo $_GET['batiment'] . "\n" . $_GET['salle'];
    }
    if(!isset($_GET['batiment']) && ($_GET['salle'])) {
    echo "Contient pas les bons paramètres";
    }
?>
</body>
</html>