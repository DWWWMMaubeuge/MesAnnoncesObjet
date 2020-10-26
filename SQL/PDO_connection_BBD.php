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


$reponse =$conn->query('SELECT * FROM fouad.fruits');



//SELECT fruits.id , fruits.nom , fruits.prix , fruits.stock, FROM fouad.fruits


echo"<table border=1px solid black>";

echo" <th>Nom</th> ";
echo" <th>Prix</th> ";
echo" <th>Stock</th> ";
echo" <th>Pays</th> ";




while ($donnees = $reponse->fetch()){

    

  

                    echo"<tr>";
                    echo"<td>";
                                 echo "$donnees[nom]";
                     echo"</td>";
                    

                    echo"<td>";
                                   echo "$donnees[prix]";
                    echo"</td>";

                    echo"<td>";
                                   echo "$donnees[stock]";
                    echo"</td>";


                    echo"<td>";
                                   echo "$donnees[pays]";
                    echo"</td>";
                    echo"</tr>";


}
echo"</table>";


?> 

<style>

h2{
    color:Blue; 
    
}

table {


border:3px solid #6495ed;
border-collapse:collapse;
width:90%;
margin:auto;
}
thead, tfoot {
background-color:#D0E3FA;
background-image:url(sky.jpg);
border:1px solid #6495ed;
}
tbody {
background-color:#FFFFFF;
border:1px solid #6495ed;
}
th {
font-family:monospace;
border:1px dotted #6495ed;
padding:5px;
background-color:#EFF6FF;
width:25%;
font-size: 20px
}
td {
font-family:Verdana;
font-size:80%;
border:1px solid #6495ed;
padding:5px;
text-align:center;
}
caption {
font-family:sans-serif;
}

</style>