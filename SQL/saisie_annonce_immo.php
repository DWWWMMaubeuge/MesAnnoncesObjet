<?php
include ( 'AO_fonctions_generalesSQL.php');

setHeaderNoCache();
gestionSession();
echo setMenuLink();

$newAnnonce = new Immobilier();

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();

    header ('location: affiche_annonces.php');
}
echo $newAnnonce->form( 'saisie_annonce_immo.php');
?>
