<?php

$tableau = [
    [ "1.1", "1.2"],
    [ "2.1", "2.2", "2.3"], 
    [ "3.1", "3.2"]
            ]; 


//tableau boucle for
$animaux = [ 'chien', 'chat', 'poisson' ];
$cris = [ 'aboie', 'miaule', 'rien' ];
// 1.1   |  1.2   |
// 2.1   |  2.2   |

echo "<br><br>à l'arrache XAVIER<br>";
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



function affTD( $data )
{
    echo "<td>$data</td>\n";
}


function affTableau( $tab )
{
    echo "<table border=\"solid\">\n";
    for( $ligne=0 ; $ligne < count(  $tab ) ; $ligne++ )
    {
        echo "<tr>\n";
        $ligneTab = $tab[ $ligne ];
        for( $colone=0 ; $colone < count(  $ligneTab ) ; $colone++ )
            affTD( $ligneTab[$colone] );

        echo "</tr>\n";
    }
    echo "</table>\n";
}

affTableau( $tableau );

echo "<br><br>objet<br>";
class Tableau
{
    private $tab;

    public function __construct( $t )
    {
        $this->tab = $t;
    }


//tableau boucle foreach
$animals=array('chien'=>'aboie', 'chat'=>'miaule','poisson'=>'rien');

echo "<br> Version a l'arrache<br>";

for( $i=0 ; $i < count($animaux) ; $i++ )
        echo "$i ->".$animaux[$i]." ".$cris[$i]."<br>";
        


echo "<br> Version Procedurale (ou fonctionnelle)<br>";

echo "boucle for<br>";


function afficheAnimal( $tab )
{
    GLOBAL $animaux, $cris;
	for( $i=0 ; $i < count($tab) ; $i++ )
	echo "$i ->".$animaux[$i]." ".$cris[$i]."<br>";
}


afficheAnimal($animaux);
echo "<br>";

echo "boucle foreach <br>";


function callArray($array)
{
        foreach ($array as $key=>$values)
        {  
            echo $key."-> ".$values." "."<br>";  
        }       
}

callArray($animals);

//afficheAnimal(  0 );
// 0 chien -> aboie

function afficheAnimal2( $espece )
{
    GLOBAL $animals;
   
    foreach ($animals as $key=>$values)
    {  if ($key == $espece)
        {
            echo $key."->".$values."<br>";
        break;
        }
    }     

}

echo "<br>";

afficheAnimal2('chat');

echo "<br> Version Objet<br>";

echo "<br>";

$tableau = [
    [ "1.1", "1.2"],
    [ "2.1", "2.2"],
    [ "3.1", "3.2","3.3"]
            ]; 

class Table
{
    protected $tab;

    public function __construct($t)
    {   
        $this->tab=$t;
    }

    public function display()
    {   
        
        $this->tab;

        echo "<table border=solid>";
    
    foreach ($this->tab as $ligne1 => $val)
    {
        echo "<tr>";
        echo "<td>".($ligne1 + 1). ' : '."</td>";
        foreach($val as $ni => $ligne2){
            echo "<td>".$ligne2. " "."</td>";
        }
        echo "</tr>";
    }
    echo "</table>"; 
    }
}


$tabs= new Table($tableau);
$tabs->display();

/*class Chien extends Animal
{
    public function sound()
{

    parent::sound();
}

}


$chien = new Chien();
//$chat = new Chat();
//$poisson = new Poisson();


$listeAnimaux = [ $chien, $chat, $poisson   ];

foreach(  $listeAnimaux as $anim )
    $anim->cri();


*/
    public function affTableau2()
    {
        $this->affTableau();
    }

    public function affTableau()
    {
        affTableau( $this->tab );
    }
}

$TabObj = new Tableau(  $tableau  );
$TabObj->affTableau();
$TabObj->affTableau2();



class TableauAZ
{
    private $tab;

    public function __construct( )
    {
        echo "je suis dans le constructeur<br>";
    }

    public function __destruct( )
    {
        echo "je suis dans le destructeur<br>";
    }
}

$TabObjAZ = new TableauAZ();
$TabObjAZ = null;

?>