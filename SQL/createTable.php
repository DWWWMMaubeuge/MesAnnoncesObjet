<?php
	$servername = "10.115.49.73";
	$username = "xavier";
	$password = "xavier";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) 
	{
	  die("Connection failed: " . $conn->connect_error);
	}

	$req = "CREATE TABLE xavier.annonces (  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, titre varchar(255),  description varchar(255),  image varchar(255), prix INT );";
	$result = $conn->query( $req );	
	$conn->close();
?>
