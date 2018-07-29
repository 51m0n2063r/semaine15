<?php

$aujourdhui = new DateTime();

$lancement  = new DateTime('14-02-2012');

$temps_construction = new DateInterval('P15D');

// Il faut 15 jours pour construire le bâtiment

if($aujourdhui->sub($temps_construction) > $lancement) 

// Si (la date du jour - 15 jours) est supérieure à la date de lancement

{     

    echo 'Bâtiment construit !';

}

else

{

    echo 'Veuillez attendre la fin de la construction';

}