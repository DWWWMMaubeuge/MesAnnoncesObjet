<?php


// 0 chien -> aboie
// 1 chat -> miaule
// 2 poisson -> rien

//tableau boucle for
$animaux = [ 'chien', 'chat', 'poisson' ];
$cris = [ 'aboie', 'miaule', 'rien' ];

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
   
    foreach ($animals as $key)
    {  if ($animals == $espece)
        {
            echo $animals[0]."->".$animals[1]."<br>";
        break;
        }
    }     

}

afficheAnimal2('chat');

echo "<br> Version Objet<br>";

echo "<br>";

class Animal
{
    protected $race;
    protected $sound;
 

public function __construct( )
{   
    $this->race=array();
    $this->sound=array();
   
}


public function sound()

{   
  
}

}


class Chien extends Animal
{
    public function sound()
{

    parent::sound();
}

}


$chien = new Chien();
//$chat = new Chat();
//$poisson = new Poisson();


/*$listeAnimaux = [ $chien, $chat, $poisson   ];

foreach(  $listeAnimaux as $anim )
    $anim->cri();


*/


?>