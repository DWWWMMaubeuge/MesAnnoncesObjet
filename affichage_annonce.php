<?php

include ( 'AO_fonction_generales.php');

setHeaderNoCache();
gestionSession();

foreach ($annonces as $annonce_obj ) 
{

	echo $annonce_obj->show();	
}

?>


<a href="Annonce.php">Ajouter une annoncegrrrr</a>