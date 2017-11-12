<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Ma page PHP</title>
</head>
<body>
<h1> BONJOUR</h1>

<?php
/**
 * Created by PhpStorm.
 * User: CK7UP
 * Date: 11/11/17
 * Time: 7:28 PM
 */

$salaire=2000;
$informatique=true;
$job='informatique';
$note=11.5;

echo '<p> Le salaire que j\'aspire pour vivre est : <strong>'.$salaire.'€</strong> </p> 
<p>La branche dans la quelle je travaille ou souhaiterais travailler est : <strong>L\''.$job.'</strong> 
<p> Pour preciser :';

     if ($informatique==true)
            {
                echo '<strong> L\''.$job.' est la branche dans laquelle je travaille </strong>';
            }
                else
                    {
                        echo '<strong> L\''.$job.' est la branche dans laquelle je souhaite travaille</p></strong> ';
                    }
echo '<p> La note moyenne que j\'ai obtenue au bac est : <strong>'.$note.'  / 20</strong></p>';

?>
</body>
</html>
