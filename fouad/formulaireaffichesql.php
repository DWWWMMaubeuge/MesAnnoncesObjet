<?php
  

    $servername = "10.115.49.73";
    $username = "nicolas";
    $password = "nicolas";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    }

    echo "connexion ok";
    echo "<br>";
    $sql = "SELECT id, nom, prenom, mail, adresse FROM nicolas.utilisateurs"; 

    $result = $conn->query( $sql ); 
    


  if ( $result->num_rows > 0) 
  {
   

  while($row = $result->fetch_assoc())

  {
    
    echo $row["id"]."- " .$row["nom"]."- ".$row["prenom"]. "- ".$row["mail"]."- ".$row["adresse"]."<br>";
  }

 
} 

else {
  echo "0 results";
}

  $conn->close();
?>


