<?php

$people = array     (  "peter"      =>     30 ,       "alex"        =>18,            "marie"=> 25  );
$cars     = array      (  "volvo"      => 1999 ,       "audi"       =>2003,         "bmw"=> 1990  );
$fruits   = array      (  "pomme"  =>     40 ,       "banane"  =>60,           "poires"=> 36  );




function Getname ($tableaux){

    foreach( $tableaux as $name=>$values)
    {
      
        echo "<td>$name</td>";
 
    }
}


function Getvalue ($tableaux){


    foreach( $tableaux as $name=>$values)
    {
      
        echo "<td>$values</td>"; 

    }
}









echo"<table >";
echo"<tr>";
Getname ($people);
echo"</tr>";
echo"<tr>";
Getvalue ($people);
echo"</tr>";
echo"</table>";



?> 

<style>

table, th, td {
  border: 1px solid black;
}


</style>


  

 








</body>
</html>



