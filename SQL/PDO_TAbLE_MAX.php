<?php
$servername = "10.115.49.73";
$username    = "fouad";
$password    = "fouad";
$dbname      ="fouad";

try {
                    $conn = new PDO("mysql:host=$servername;dbname", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected successfully";
                    echo "<br>";

                    echo "<h2 >Tableaux Fruits</h2>" ;
                    } catch(PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
            }

  //$requete = "SELECT * FROM fouad";
 //echo "$sql = 'SELECT id, nom, prix,age , stock,pays  FROM fruits';";
// echo $sql= "SELECT * FROM fouad.fruits;";

while($row = $reponse->fetch()) 
{

    echo "<tr>"; 

      echo "<td>".$row["nom"]."</td>";
      echo "<td>".$row["prix"]."</td>" ;
      echo "<td>".$row["stock"]."</td>";
      echo "<td>".$row["pays"]."</td> ";
    echo "</tr>";
 
}





$reponse =$conn->query('SELECT * FROM fouad.fruits');

$i= 0;
echo "<table border=1px solid black>";

while ($row = mysqli_fetch_assoc($result)) 

{
    echo "<br>";
    echo gettype($row);
    print_r($row);

    if($i==0){
        echo "<tr>";
        foreach($row as $key=>$values){

            echo "<th>" .$key. "</th>";
            $i++;
        }
        echo"</tr>";
       }
       echo "<tr>";
        foreach($row as $key=>$values){
            echo "<td>" .$values. "</td>";
    }
    echo "</tr>";
}

echo "</table>"

?>