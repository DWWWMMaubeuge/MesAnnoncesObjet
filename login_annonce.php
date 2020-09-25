<?php
include ( 'fonctions_gene_annonce.php');

setHeaderNoCache();
gestionSession();


$newUser = new Annonce();

if ( isset($_POST['ok']) )
{
        $newAnnonce->parsePost();
        $_SESSION['annonce']  = $annonce;
        header ('location: page_membre_annonce.php');
    
}
echo $newAnnonce->formLogin();
?>
