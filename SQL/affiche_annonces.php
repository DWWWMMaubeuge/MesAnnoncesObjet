<?php
include ( 'AO_fonctions_generalesSQL.php');

setHeaderNoCache();

$req = "SELECT * FROM xavier.annonces;"; 
$result = executeSQL( $req );

while ( $row = $result->fetch_assoc() )
{	

	$anonce = new annonceSQL();
	
	$anonce->readData( $row );
	
	echo $anonce->show();	
}


?>
<br>
<a href='saisie_annonce.php'>ajouter une annonce</a>