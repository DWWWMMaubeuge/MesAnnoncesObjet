<?php
include ( 'L_fonctions_generales.php');

setHeaderNoCache();
gestionSession();


$newAnnonce = new Annonce();

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    if ( $newAnnonce->checkPwd() )
    {    
        $_SESSION['annonce']  = $newAnnonce;
        header ('location: pageannonce.php');
    }
}
echo $newAnnonce->form_annonce();
?>
