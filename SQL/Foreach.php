<?php

    $people = array (  "peter" => 30 , "alex"=>18,  "marie"=> 25  );
    $cars = array (  "volvo" => 1999 , "audi"=>2003,  "bmw"=> 1990  );
    $fruits = array (  "pomme" => 40 , "banane"=>60,  "poires"=> 36  );


    

             // echo $people ["marie"];

           //  echo "peter is " . $people ['peter'] . " years old." ;

            // echo" <br>";

            // echo "marie is " . $people ['marie'] . " years old.";

            // echo" <br>";
/*
    foreach ($people as $elements )
      {

     echo $elements;

            echo "  J'ai   $elements   ans.<br>";
       echo" <br>";

      }

     

    
function people () {
 
    Global $people;

    foreach ($people as $elements=>$values )
    {


        echo $elements. " " . $values."<br>";



     }
}



function cars () {

    Global $cars;

    foreach ($cars as $elements=>$values )
        {


            echo $elements. " " . $values."<br>";

     }

}




function fruits (){
Global $fruits;

    foreach ($fruits as $elements =>$values)
      {


        echo $elements. " " . $values."<br>";
}

}


*/

function affichtab ($tableaux){

    foreach ($tableaux as $elements=>$values)
     {    
    echo "$elements=>$values<br>";  

      }
 
  
   }


/*
people ();

echo "<br>";

cars ();

echo "<br>";

fruits ();


echo "<br>";
*/

affichtab ($people);

echo "<br>";

affichtab ($cars);

echo "<br>";

affichtab ($fruits);

echo "<br>";





?>















?> 