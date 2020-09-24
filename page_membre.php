<?php
include ( 'L_fonctions_generales.php');

setHeaderNoCache();
gestionSession();

$user_obj  = $_SESSION['user'];
$users = $_SESSION['users'];

echo "Votre login est ".$user_obj->pseudo."<br>\n";

// On affiche un lien pour fermer notre session
echo '<a href="./logout.php">Déconnection</a><br>';
	 	
?>
<?php

foreach ($users as $user_obj ) 
{
	echo $user_obj->affiche();	
}


?>