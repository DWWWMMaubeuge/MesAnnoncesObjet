<?php
include ( 'AO_fonctions_generalesSQL.php');

setHeaderNoCache();
gestionSession();

<<<<<<< HEAD
$newAnnonce = new Animal();
=======
$newAnnonce = new Animaux();
>>>>>>> 161e0a7684f0a1543a15d55df0a41c2e3b2c2db4

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();

    //header ('location: affiche_annonces.php');
}
echo $newAnnonce->form( 'test_animal.php');
?>
