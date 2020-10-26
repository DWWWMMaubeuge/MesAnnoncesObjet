<?php


// 0 chien -> aboie
// 1 chat -> miaule
// 2 poisson -> rien


$animaux = [ 'chien', 'chat', 'poisson' ];
$cris = [ 'aboie', 'miaule', 'rien' ];


echo "<br> Version a l'arrache<br>";


foreach($animaux as $cris =>$element){

    echo "$cris=>$element <br>";
}




/* for ($numero=0; $numero<3; $numero++){

    echo "$animaux[$numero]<br>";
} */





/* echo "<br> Version Procedurale (ou fonctionnelle)<br>";

function afficheAnimal(  $num )
{
    GLOBAL $animaux, $cris;
}


afficheAnimal(  0 );
// 0 chien -> aboie



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



?> */