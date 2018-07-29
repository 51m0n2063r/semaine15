<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair ou impair ?</title>
</head>
<body>
<?php
        //fonction qui fait le diagnostic
        function parite($nombre){
            if (($nombre%2)==0){
                $verdict='pair';
            }
            else{
                $verdict='impair';
            }
            return $verdict;
        }
        ?>
        <form method="POST" action="pairImpair.php">
            Entrez votre nombre<input type="text" name="num"/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        <?php
        //si user a cliqué OK
        if(isset($_POST['valider'])){
            //récupère la valeur entrée
            $nombre=$_POST['num'];
            //place dans $toto la valeur de retour de ma fonction
            $toto=parite($nombre);
            //affiche le verdict entier
            echo 'Ce nombre est '.$toto.'.';
        }
        ?>
</body>
</html>