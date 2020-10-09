<?php
<<<<<<< HEAD
	$servername = "10.115.49.73";
	$username = "fatima";
	$password = "fatima";
=======
>>>>>>> master

	include ( 'AO_fonctions_generalesSQL.php');

<<<<<<< HEAD
	// Check connection
	if ($conn->connect_error) 
	{
	  die("Connection failed: " . $conn->connect_error);
	}
	/*$req= "ALTER TABLE fatima.annonces ADD nbrPieces INT";
	if (mysqli_query($conn, $req)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $req . "<br>" . mysqli_error($conn);
      }*/
	$req = "CREATE TABLE fatima.annonces (  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, titre varchar(255),  description varchar(255),  image varchar(255), prix INT );";
	$result = $conn->query( $req );	
	$conn->close();
=======


	echo "creation de la table annonces<br>";
	$req = "CREATE TABLE xavier.annonces (  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, titre varchar(255),  description varchar(255),  image varchar(255), prix INT );";
	executeSQL( $req );

	echo "alter de la table annonces<br>";
	$req = "ALTER TABLE xavier.annonces ADD (  surface INT, nbrpieces INT );";
	executeSQL( $req );



>>>>>>> master
?>
