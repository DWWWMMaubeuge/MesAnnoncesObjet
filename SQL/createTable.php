<?php

	include ( 'AO_fonctions_generalesSQL.php');



	echo "creation de la table annonces<br>";
	$req = "CREATE TABLE fatima.annonces (  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, titre varchar(255),  description varchar(255),  image varchar(255), prix INT );";
	executeSQL( $req );

	echo "alter de la table annonces<br>";
	$req = "ALTER TABLE fatima.annonces ADD (  surface INT, nbrpieces INT );";
	executeSQL( $req );



?>
