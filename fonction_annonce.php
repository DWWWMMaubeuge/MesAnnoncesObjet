

<?php
include ( 'AO_fonction_general.php');

setHeaderNoCache();
gestionSession();

$newAnnonce = new Annonce();

if ( isset($_POST['envoi']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();


    header ('location: page_annonce.php');
}
echo $newAnnonce->form();
?>

