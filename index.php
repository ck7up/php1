<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Ma page PHP</title>
</head>
<body>
<h1>Bienvenue sur mon site php</h1>
<p> J'apprends le PHP </p>
<?php
    echo '<p>Bonjour ! <br/>
          Quel est la date ? 
          <br/> Nous sommes le '.date("l").' !</p>';


/*Variable
- String = chaine de caractere
- interger= entier naturel
- bool = logique (vrai ou faux)
- float = Nombre reel
*/

$nom='Christian';
$taille=1.81;
$poids=90;
$garcon=true;

// Commande ECHO
echo'<p>Bonjour, mon nom n\'est pas Henry mais <strong>'.$nom.'
    </strong> et ma taille reel est de 
    <strong> '.$taille.'cm
    </strong>, mon poids est de 
    <strong> '.$poids.'kg 
    </strong> et je suis ';
    if($garcon==true){
        echo'un garcon.</p>';
    }
        else {
            echo'une fille.</p>';
        }

//



?>
</body>
</html>