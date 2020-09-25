<?php
$__TEST = false;

include ("FonctionGAnnonce.php");
include ("page_annonce.php");

setHeaderNoCache();
gestionSession();

// la fonction retourne un tableau dans lequel il y a :
// titre (O) 
// description (1) 
// image (2)
// prix (3) 

$ret_annonce_array = parsePost();

if ( $ret_annonce_array != NULL )
{
    // j'enregistre l'annonce dans le dictionnaire avec la clé 'compteur' 
    $annonces[ $compteur ] = $ret_annonce_array; 
    // j'enregistre mon dictionnaire d'annonce dans la session
    $_SESSION[ "annonces" ]  = $annonces;
    
    // j'incremente le compteur 
    $compteur++;
    //j'enregistre la valeurs actuelle du compteur dans la session
    $_SESSION[ "compteur" ]  = $compteur;

    header("location: page_annonce.php");
}
$cible= "ajouter_annonce.php";

formAnnonce( $cible );

?>