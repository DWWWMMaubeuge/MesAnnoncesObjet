<?php
include ( 'AO_fonctions_generales.php');

setHeaderNoCache();
gestionSession();

$newAnnonce = new Voiture();

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();
    header ('location: affiche_annonces.php');
}
echo $newAnnonce->form( 'test_voiture.php');
?>