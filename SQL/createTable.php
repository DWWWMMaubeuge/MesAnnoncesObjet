<?php

	include ( 'AO_fonctions_generalesSQL.php');



	echo "creation de la table annonces<br>";
	$req = "CREATE TABLE xavier.annonces (  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, titre varchar(255),  description varchar(255),  image varchar(255), prix INT );";
	executeSQL( $req );

	echo "alter de la table annonces<br>";
	$req = "ALTER TABLE xavier.annonces ADD (  surface INT, nbrpieces INT );";
	executeSQL( $req );



?>
<html>
  <head>
    <title>Formulaire annonce en PHP/MySQL</title>
  </head>
  <body>
    <form method="post" action="createTable.php">
      <input type="text" name="titre" placeholder="Entrez votre titre" /><br />
      <input type="email" name="description" placeholder="Entrez votre description" /><br />
	  <input type="text" name="image" placeholder="Entrez votre image"width=150px; /><br />
      <input type="email" name="prix" placeholder="Entrez votre prix" /><br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>