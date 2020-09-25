<?php
include ( 'L_fonctions_generales.php');

setHeaderNoCache();
gestionSession();

	 	
?>
<?php

foreach ($users as $user_obj ) 
{
	echo $user_obj->affiche();	
}


?>