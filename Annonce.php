<?php
include ( 'AO_fonction_generales.php');

setHeaderNoCache();
gestionSession();

$newAnnonce = new Annonce();

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();

    
    header ('location: affichage_annonce.php');
}
echo $newAnnonce->form('Annonce.php');
?>
