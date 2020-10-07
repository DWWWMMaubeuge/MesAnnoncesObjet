<?php
include ( 'L_fonctions_generales.php');

setHeaderNoCache();
gestionSession();

<<<<<<< HEAD
$Annonce_obj  = $_SESSION['user'];
$Annonce = $_SESSION['users'];

echo "Votre login est ".$user_obj->pseudo."<br>\n";

// On affiche un lien pour fermer notre session
echo '<a href="./logout.php">Déconnection</a><br>';
=======
>>>>>>> 0136a321c8aea243b9074170da4598599964863b
	 	
?>
<?php

foreach ($Annonce as $Annonce_obj ) 
{

	echo $Annonce_obj->affiche();	
}



?>