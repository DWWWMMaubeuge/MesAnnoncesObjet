
<?php

$tableau = [
    [ "1.1", "1.2"],
    [ "2.1", "2.2"],
    [ "3.1", "3.2"]
            ]; 

             
             
            for ($i = 0; $i < count ;$i++){
                          {
                            for ($g = 0; $g <count  ;$g++)
                            {
                    echo $tableau[i][g];
                         }
                    }
     
                
                    }
echo "batard de xavier" ;
            ?>





// 1.1   |  1.2   |
// 2.1   |  2.2   |


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








