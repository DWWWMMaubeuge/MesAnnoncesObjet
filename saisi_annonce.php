<?php
include ( 'AO_fonctions_generales.php');

setHeaderNoCache();
gestionSession();


$newAnnonce = new Annonce();

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();
   
    header ('location: affiche_annonce.php');
}
   
echo $newAnnonce->form( "saisi_annonce.php");
?>