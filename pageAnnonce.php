<?php

include ('FonctionGAnnonce.php');

setHeaderNoCache();
gestionSession();


//echo "Votre login est ".$annonce_obj->pseudo."<br>\n";

// On affiche un lien pour fermer notre session
//echo '<a href="./logout.php">Déconnection</a><br>';
	 	

foreach ($annonces as $annonce_obj ) 
{
	echo $annonce_obj->show();
	echo "<br>";	
}


?><a href="saisieAnnonce.php">Ajouter une annonce</a><?php

?>