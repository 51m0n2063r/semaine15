<?php
        if(isset($_POST['valider'])){
            $nom=$_POST['nom'];
            $prénom=$_POST['prénom'];
            echo 'Salut '. $nom.' '. $prénom.'<br/>Bienvenue sur mon site !';
        }
        ?>