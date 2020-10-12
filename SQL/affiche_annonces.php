<?php
include ( 'AO_fonctions_generalesSQL.php');

setHeaderNoCache();

$req = "SELECT * FROM xavier.annonces;"; 

//$req = "SELECT * FROM xavier.annonces, xavier.marque_voiture WHERE marque_voiture.id=annonces.marque ;"; 

$result = executeSQL( $req );

while ( $row = $result->fetch_assoc() )
{	
	echo $row[ 'typeannonce' ]."<br>"; 

	if ( $row[ 'typeannonce' ] == 'IMO')
		$anonce = new Immobilier();
	else if ( $row[ 'typeannonce' ] == 'CAR')
		$anonce = new Voiture();
	else if ( $row[ 'typeannonce' ] == 'VOI')
		$anonce = new Voilier();
<<<<<<< HEAD
	else if ($row['typeannonce'] == 'ANI')
		$annonce = new Animaux();
=======
	else if ( $row[ 'typeannonce' ] == 'ANI')
		$anonce = new Animaux();
>>>>>>> 2fd98b12b8dd13e486173ca1b17aae02b2d0ab7b
	else
		$anonce = new AnnonceSQL();

	$anonce->readData( $row );
	echo $anonce->show();	
}


?>
<br>
<a href='saisie_annonce.php'>ajouter une annonce</a>