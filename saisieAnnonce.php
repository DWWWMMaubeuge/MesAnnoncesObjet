<?php
//include ( 'L_fonctions_generales.php');
include ('FonctionGAnnonce.php');

setHeaderNoCache();
gestionSession();

$newAnnonce = new Annonce();

if ( isset($_POST['envoi']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();

    header ('location: pageAnnonce.php');
}
echo $newAnnonce->formAnnonce("saisieAnnonce.php");






?>
