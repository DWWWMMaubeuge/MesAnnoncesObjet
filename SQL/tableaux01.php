/*function Getname ($tableaux){

echo "<table>";
echo "<tbody>";
echo "<tr>";
foreach( $tableaux as $name=>$values)
{
    echo "<td>";
    echo "<tr>" . $name . "</tr>";
    echo "<tr>" . $values . "</tr>";
    echo "</td>";
} 
echo "</tr>";
echo "</tbody>";
echo "</table>";
}

*/
function Getname ($tableaux){
echo "<table>";
echo "<tbody>";
echo "<tr>";
foreach ($tableaux as $name=>$value){
    echo "<td>";
    echo "<tr>" . $name . "</tr>";
    echo "<tr>" . $value . "</tr>";
    echo "</td>";
} 
echo "</tr>";
echo "</tbody>";
echo "</table>";
}








// Getname ($people);
// echo "<br>";

// echo "<table>";

//         echo "<tr>";
//         echo "<td>ouiii</td>";
//         echo "</tr>";
//         echo "<tr>";
//         echo "<td>nonnn</td>";
//         echo "</tr>";
    
//         echo "</table>";

// ?> 


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?php Getname($fruits); ?>

</body>
</html>