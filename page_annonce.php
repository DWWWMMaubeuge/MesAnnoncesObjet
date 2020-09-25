<?php

include ( 'AO_fonction_general.php');

setHeaderNoCache();
gestionSession();


foreach ($annonces as $annonce_obj ) 
{
	echo $annonce_obj->show();	
}


?>

<a href="saisi_annonce.php"> ajouter une annonce </a>