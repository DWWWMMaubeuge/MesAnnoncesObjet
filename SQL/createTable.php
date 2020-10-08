<?php
<<<<<<< HEAD
	$servername = "10.115.49.73";
	$username = "nicolas";
	$password = "nicolas";
=======
>>>>>>> 31095d3d5ec04c48d778987f629c567695329ea7

	include ( 'AO_fonctions_generalesSQL.php');


<<<<<<< HEAD
	//$req = "CREATE TABLE nicolas.annonce (  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, titre varchar(255),  description varchar(255),  image varchar(255), prix INT );";
	
	echo $req."<br>";
	$result = $conn->query( $req );	
	$conn->close();

	if ( $_POST )
	{
		$titre = "";
		$description ="";
		$image ="";
		$prix = "";

		$titre = $_POST["titre"];

		$description = $_POST["description"];

		$image = $_POST["image"];

		$prix = $_POST['prix'];

		if ( $titre == "" ){
			die("S'il vous plaît entrez votre titre");
		  }
		if ( $description == "" ){
			die("S'il vous plaît entrez votre description");
		  }
		  if ( $image == "" ){
			die("S'il vous plaît entrez votre image");
		  }
		  if ( $prix == "" ){
			die("S'il vous plaît entrez votre prix");
		  }
	}
=======

	echo "creation de la table annonces<br>";
	$req = "CREATE TABLE xavier.annonces (  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, titre varchar(255),  description varchar(255),  image varchar(255), prix INT );";
	executeSQL( $req );

	echo "alter de la table annonces<br>";
	$req = "ALTER TABLE xavier.annonces ADD (  surface INT, nbrpieces INT );";
	executeSQL( $req );



>>>>>>> 31095d3d5ec04c48d778987f629c567695329ea7
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