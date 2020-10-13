<?php
  // Vérifie qu'il provient d'un formulaire
  //CREATE TABLE xavier.form01 ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, nom VARCHAR(255), email VARCHAR(255) );

function SQLQuerry( $req )
{
    $servername = "10.115.49.73";
    $username = "steven";
    $password = "steven";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    echo $req."<br>";
    
    $result = $conn->query( $req ); 
    
    $conn->close();
}




  if ( $_POST ) 
  {
    $name  = "";
    $surname = "";
    $age = "";
    $dep = "";
    $email = ""; 

    //if ( isset( $_POST["Name"])  )
      $name = $_POST["Name"];
    
    //if ( isset( $_POST["Email"])  )
      $email = $_POST["Email"];

     //if ( isset( $_POST["Email"])  )
      $surname = $_POST["Surname"];

    //if ( isset( $_POST["Name"])  )
      $age = $_POST["Age"];

    //if ( isset( $_POST["Name"])  )
      $dep = $_POST["Dep"];
    
    if ( $name == "" )
    {
      die("S'il vous plaît entrez votre nom");
    }

    if ( $surname == "" )
    {
      die("S'il vous plaît entrez votre prénom");
    }

    if ( $age == "" )
    {
      die("S'il vous plaît entrez votre age");
    }
    
    if ( $email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      die("S'il vous plaît entrez votre adresse e-mail");
    }

        if ( $dep == "" )
    {
      die("S'il vous plaît entrez votre departement");
    }

    print "Salut " . $surname . "!, votre adresse e-mail est ". $email."<br>";

    $req = "ALTER TABLE steven.form01 ADD dep INT ";
    SQLQuerry( $req );
    $req = "INSERT INTO steven.form01 (name, surname, age, email, dep ) VALUES ( '$name', '$surname', '$age', '$email', '$dep' );";
    SQLQuerry( $req );
  }
?>

<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
  </head>
  <body>
    <form method="post" action="formulaire01.php">
      <input type="text" name="Name" placeholder="Entrez votre nom" /><br />
      <input type="text" name="Surname" placeholder="Entrez votre prénom" /><br />
      <input type="INT" name="Age" placeholder="Entrez votre age" /><br />
      <input type="email" name="Email" placeholder="Entrez votre Email" /><br />
      <input type="INT" name="Dep" placeholder="Entrez votre departement" /><br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>

