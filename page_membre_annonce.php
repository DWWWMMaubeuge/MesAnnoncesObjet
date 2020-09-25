<?php
include ( 'fonctions_gene_annonce.php');

setHeaderNoCache();
gestionSession();
?>
<?php

foreach ($annonces as $annonce_obj ) 
{
	echo $annonce_obj->affiche();	
}


?>