<?php
include ( 'AO_fonctions_generalesSQL.php');

setHeaderNoCache();
gestionSession();

$newAnnonce = new Animal();

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();

    //header ('location: affiche_annonces.php');
}
echo $newAnnonce->form( 'test_animal.php');
?>
