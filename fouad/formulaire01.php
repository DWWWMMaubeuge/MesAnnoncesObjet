<?php
  // Vérifie qu'il provient d'un formulaire
  //CREATE TABLE xavier.form01 ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, nom VARCHAR(255), email VARCHAR(255) );

function SQLQuerry( $req )
{
    $servername = "10.115.49.73";
    $username = "nicolas";
    $password = "nicolas";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    echo $req."<br>";
    
    $result = $conn->query( $req ); 
    
    $conn->close();
}




  if ( $_POST ) 
  {
    $nom  = "";
    $prenom = ""; 
    $mail = "";
    $adresse = ""; 

    //if ( isset( $_POST["Name"])  )
      $nom = $_POST["nom"];

      $prenom = $_POST["prenom"];

    
    //if ( isset( $_POST["Email"])  )
      $mail = $_POST["mail"];
    
      $adresse = $_POST["adresse"];


    if ( $nom == "" )
    {
      die("S'il vous plaît entrez votre nom");
    }
    if ($prenom == "")
    {
      die("S'il vous plaît entrez votre prenom");
    }
    
    if ( $mail == "" || !filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
      die("S'il vous plaît entrez votre adresse e-mail");
    }
    if ($adresse == "")
    {
      die("S'il vous plaît entrez votre adresse");
    }

    print "Salut ".$prenom." " . $nom ."<br>Vous habitez à " .$adresse."!<br> Votre adresse e-mail est ". $mail."<br><br>";


    $req = "INSERT INTO nicolas.utilisateurs (nom, prenom, mail, adresse ) VALUES ( '$nom','$prenom', '$mail', '$adresse' );";
    SQLQuerry( $req );
  }
?>

<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
  </head>
  <body>
    <form method="post" action="formulaire01.php">
      <input type="text" name="nom" placeholder="Entrez votre nom" /><br />
      <input type="text" name="prenom" placeholder="Entrez votre prenom" /><br />
      <input type="email" name="mail" placeholder="Entrez votre Email" /><br />
      <input type="text" name="adresse" placeholder="Entrez votre adresse" /><br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>

