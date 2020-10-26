<?php


// 0 chien -> aboie
// 1 chat -> miaule
// 2 poisson -> rien
// ...

$animaux = [ 'chien', 'chat', 'poisson',  'oiseau' ];
$cris    = [ 'aboie', 'miaule', 'rien', 'piaille' ];

echo "<br> Version a l'arrache<br>";


for( $a=0; $a < count( $animaux ) ; $a++ )
{
    echo "$a  ".$animaux[$a]." -> ".$cris[ $a ]."<br>";
} 



$animaux = [ 
    ['chien', "aboie"],
    ['chat', "miaule" ],
    ['poisson', "rien"],
    [ 'oiseau', "piaille" ]
];


echo "<br><br>";
foreach( $animaux as $animal )
{
    echo $animal[0]." -> ".$animal[ 1 ]."<br>";
} 


$animauxKV = [ 
    ['espece' =>'chien', 'cris' => "aboie"],
    ['espece' =>'chat', 'cris' => "miaule" ],
    ['espece' =>'poisson', 'cris' => "rien"],
    ['espece' =>'oiseau', 'cris' => "piaille" ]
];


echo "<br><br>";
foreach( $animauxKV as $animal )
{
echo $animal[ 'espece' ]." -> ".$animal[ 'cris' ]."<br>";
} 

echo "<br> Version Procedurale (ou fonctionnelle)<br>";

function afficheAnimal(  $num )
{
    GLOBAL $animaux, $cris;
    
    $animal = $animaux[ $num ];

    echo $num." ".$animal[0]." -> ".$animal[ 1 ]."<br>";
}

function afficheAnimalByEspece(  $espece )
{
    GLOBAL $animaux, $cris;
    
}

for( $a=0; $a < count( $animaux ) ; $a++ )
{
    afficheAnimal(  $a );
} 


afficheAnimalByEspece( 'chat');
// 1 chat -> miaule

//afficheAnimal(  0 );
// 0 chien -> aboie


/*
echo "<br> Version Objet<br>";

class Animal
{
}

class Chien extends Animal
{
}



$chien = new Chien();
$chat = new Chat();
$poisson = new Poisson();


$listeAnimaux = [ $chien, $chat, $poisson   ];

foreach(  $listeAnimaux as $anim )
    $anim->cri();

*/

?>