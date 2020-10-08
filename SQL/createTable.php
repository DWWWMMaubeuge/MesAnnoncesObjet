<?php
	$servername = "10.115.49.73";
	$username = "nicolas";
	$password = "nicolas";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) 
	{
	  die("Connection failed: " . $conn->connect_error);
	}

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