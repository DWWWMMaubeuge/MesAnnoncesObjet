<?php
include ( 'AO_fonctions_generalesSQL.php');

setHeaderNoCache();
gestionSession();

/*
<form action="saisie_annonce.php" > 
<input type="radio" id="1" name="type_annonce" value="ANN">
<label for="audi">Annonce</label><br>
<input type="radio" id="2" name="type_annonce" value="IMO">
<label for="audi">Immobilier</label><br>
<input type="radio" id="3" name="type_annonce" value="CAR">
<label for="audi">Voiture</label><br>
<input type="submit"  name="OK" value="OK">
</form>
*/




?>

<a href="saisie_annonce.php" >Annonce</a> 
<br> 
<a href="saisie_annonce_immo.php" >Immobilier</a> 
<br> 
<a href="saisie_annonce_voiture.php" >Voiture</a> 
<br> 
<a href="saisie_annonce_voilier.php" >Voilier</a> 
<br>
<a href="annonce_animaux.php">Animaux</a> 

<?php
$newAnnonce = new Animaux();

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();

    header ('location: affiche_annonces.php');
}
echo $newAnnonce->form( 'annonce_animaux.php');
?>
	