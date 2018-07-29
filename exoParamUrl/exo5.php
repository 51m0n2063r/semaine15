<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/* ##Exercice 5 Faire une page index.php.
Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
index.php?semaine=12 */
if(isset($_GET['semaine'])) {
    echo $_GET['semaine'];
    }
    if(!isset($_GET['semaine'])) {
    echo "Contient pas les bons paramètres";
    }
?>
</body>
</html>