<?php
include ( 'AO_fonctions_generalesSQL.php');

setHeaderNoCache();

<<<<<<< HEAD
$req = "SELECT * FROM fatima.annonces;"; 
=======
$req = "SELECT * FROM xavier.annonces;"; 

//$req = "SELECT * FROM xavier.annonces, xavier.marque_voiture WHERE marque_voiture.id=annonces.marque ;"; 

>>>>>>> master
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
	else
		$anonce = new AnnonceSQL();

<<<<<<< HEAD
	$anonce = new  AnnonceSQL();
	
=======
>>>>>>> master
	$anonce->readData( $row );
	echo $anonce->show();	
}

?>
<br>
<a href='saisie_annonce.php'>ajouter une annonce</a>