<?php
$__TEST = false;

<<<<<<< HEAD
include ("FonctionGAnnonce.php");
include ("page_annonce.php");
=======
include ( "MA_saisie_annonces.php" );
include ( "MA_affichage_annonces.php" );
include ( "MA_fonctions_generales.php" );
>>>>>>> master

setHeaderNoCache();
gestionSession();

// la fonction retourne un tableau dans lequel il y a :
// titre (O) 
// description (1) 
// image (2)
// prix (3) 
<<<<<<< HEAD

$ret_annonce_array = parsePost();

=======
$ret_annonce_array = saisie_annonce();
>>>>>>> master
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

<<<<<<< HEAD
    header("location: page_annonce.php");
}
$cible= "ajouter_annonce.php";

formAnnonce( $cible );
=======
    header("location: accueil.php");
}
$cible= "ajouter_annonce.php";
form_annonce( $cible );
>>>>>>> master

?>