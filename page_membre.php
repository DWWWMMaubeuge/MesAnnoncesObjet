<?php
include ( 'L_fonctions_generales.php');

setHeaderNoCache();
gestionSession();

$Annonce_obj  = $_SESSION['user'];
$Annonce = $_SESSION['users'];

echo "Votre login est ".$user_obj->pseudo."<br>\n";

// On affiche un lien pour fermer notre session
echo '<a href="./logout.php">Déconnection</a><br>';
	 	
?>
<?php

foreach ($Annonce as $Annonce_obj ) 
{

	echo $Annonce_obj->affiche();	
}



?>