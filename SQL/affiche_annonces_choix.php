<a href='affiche_annonces_choix.php?type=IMO'>annonce IMMOBILIER</a><br>
<a href='affiche_annonces_choix.php?type=CAR'>annonce VOITUTE</a><br>
<a href='affiche_annonces_choix.php?type=VOI'>annonce VOILIER</a><br>
<a href='affiche_annonces_choix.php?type=ANI'>annonce ANIMAUX</a><br>


<style>
.container_annonces
{
  display: flex;
  flex-wrap: wrap;
  background-color: DodgerBlue;
}


.vignette_annonce  
{
  background-color: #f1f1f1;
  width: 200px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
</style>

<?php
include ( 'AO_fonctions_generalesSQL.php');

setHeaderNoCache();




$type = $_GET[ 'type' ];

$req = "SELECT * FROM xavier.annonces Where typeannonce=\"$type\";"; 

//$req = "SELECT * FROM xavier.annonces, xavier.marque_voiture WHERE marque_voiture.id=annonces.marque ;"; 

$result = executeSQL( $req );

echo "<div class=\"container_annonces\">";
while ( $row = $result->fetch_assoc() )
{	
	echo $row[ 'typeannonce' ]."<br>"; 

	if ( $row[ 'typeannonce' ] == 'IMO')
		$anonce = new Immobilier();
	else if ( $row[ 'typeannonce' ] == 'CAR')
		$anonce = new Voiture();
	else if ( $row[ 'typeannonce' ] == 'VOI')
		$anonce = new Voilier();
	else if ( $row[ 'typeannonce' ] == 'ANI')
		$anonce = new Animaux();
	else
		$anonce = new AnnonceSQL();

	$anonce->readData( $row );
    echo "<div class=\"vignette_annonce\">";
    echo $anonce->show();	
    echo "</div>";
}
echo "</div>";


?>
<br>
<a href='saisie_annonce.php'>ajouter une annonce</a>