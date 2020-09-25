<?php
include ( 'fonction_gene_annonce.php');

setHeaderNoCache();
gestionSession();

$newAnnonce = new Annonce();

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();

    $_SESSION['annonce']  = $newannonce;
    header ('location: page_membre_annonce.php');
}
echo $newAnnonce->form();
?>