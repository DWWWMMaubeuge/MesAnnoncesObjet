<?php
include ( 'AO_fonctions_generales.php');

setHeaderNoCache();
gestionSession();


foreach ($annonces as $obj ) 
{
	echo $obj->show();	
}


?>