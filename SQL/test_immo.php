<?php
include ( 'AO_fonctions_generalesSQL.php');

setHeaderNoCache();
gestionSession();

$newAnnonce = new Immobilier();

if ( isset($_POST['ok']) )
{
    $newAnnonce->parsePost();
    $newAnnonce->save();
    header ('location: affiche_annonces.php');
}
echo $newAnnonce->form( 'test_immo.php');


public function save()
	{
		$req = "INSERT INTO nicolas.annonces ( titre, description, image, prix ) VALUES ( '".$this->titre."','".$this->description."','".$this->image."', ".$this->prix." )";
		return executeSQL( $req );
	}
?>
