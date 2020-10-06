<?php
include ( 'AO_fonctions_generales.php');

setHeaderNoCache();
gestionSession();
	 	

foreach ( $annonces as $annonce_obj ) 
{
	echo $annonce_obj->show();	
}
?>
<br>
<a href='saisie_annonce.php'>ajouter une annonce</a>
<br><a href='test_immo.php'>ajouter une annonce immobilière</a>
<br><a href='test_voiture.php'>ajouter une annonce automobile</a>