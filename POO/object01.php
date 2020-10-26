<?php


// 0 chien -> aboie
// 1 chat -> miaule
// 2 poisson -> rien


$animaux = [ 'chien', 'chat', 'poisson' ];
$cris = [ 'aboie', 'miaule', 'rien' ];



echo "<br> Version a l'arrache<br>";


echo "<br> Version Procedurale (ou fonctionnelle)<br>";

function afficheAnimal(  $num )
{
    GLOBAL $animaux, $cris;
}


afficheAnimal(  0 );
// 0 chien -> aboie


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