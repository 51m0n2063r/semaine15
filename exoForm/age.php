<?php
$age=$_POST['age'];

if($age<5){
    $verdict='Ouh le bébé !';
}
elseif($age<13){
    $verdict='Vous êtes un enfant !';
}
elseif($age<18){
    $verdict='Vous êtes un(e) ado !';
}
elseif($age>=120){
    $verdict='je croie que tu me troll!!!';
}
else{
    $verdict='Ah ! enfin un(e) adulte !';
}
echo $verdict;
?>