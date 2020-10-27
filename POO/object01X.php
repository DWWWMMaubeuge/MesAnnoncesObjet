
<?php

$tableau = [
    [ "1.1", "1.2","3.3"],
    [ "2.1", "2.2","2,6"],
    [ "3.1", "3.2","1.2"]
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


                                function affichTab ($tab)
                                {

                                    echo "<br><br>En Function<br>";
                                    echo "<table border=\"solid\">\n";
                                    for( $ligne=0 ; $ligne < count(  $tab ) ; $ligne++ )
                                    {
                                        echo "<tr>\n";
                                        $ligneTab = $tab[ $ligne ];
                                        for( $colone=0 ; $colone < count(  $ligneTab ) ; $colone++ )
                                            echo "<td>".$ligneTab[$colone]."</td>\n";
                                
                                        echo "</tr>\n";
                                    }
                                    echo "</table>\n";
                                }
                            
                                
                                
                                
                                
                               affichTab(   $tableau   );


                               class Tableau
                               {
                                   private $tab;
                           
                                   public function __construct($t)
                                   {
                                       $this->tab = $t;
                           

                                   }
                           
                                   public function affTableau()
                                   {
                           
                                       echo "<br><br>En OBJET<br>";
                                       echo "<table border=\"solid\">\n";
                                       for( $ligne=0 ; $ligne < count(  $this->tab ) ; $ligne++ )
                                       {
                                           echo "<tr>\n";
                                           $ligneTab = $this->tab[ $ligne ];
                                           for( $colone=0 ; $colone < count(  $ligneTab ) ; $colone++ )
                                               echo "<td>".$ligneTab[$colone]."</td>\n";
                                   
                                           echo "</tr>\n";
                                       }
                                       echo "</table>\n";
                                   }
                                 }
                               
                               $tabObj = new Tableau($tableau);
                               $tabObj->affTableau();



















?>



