<?php

$tableau = [
    [ "1.1", "1.2"],
    [ "2.1", "2.2"],
    [ "3.1", "3.2"]
            ]; 


// 1.1   |  1.2   |
// 2.1   |  2.2   |

echo "<br><br>à l'arrache<br>";
echo "<table border=\"solid\">\n";
for( $ligne=0 ; $ligne < count(  $tableau ) ; $ligne++ )
{
    echo "<tr>\n";
    $ligneTab = $tableau[ $ligne ];
    for( $colone=0 ; $colone < count(  $ligneTab ) ; $colone++ )
        echo "<td>".$ligneTab[$colone]."</td>\n";

    echo "</tr>\n";
}
echo "</table>\n";

echo "<br><br>procedurale ou fonctionnelle<br>";







?>