<?php
include ( 'AO_fonctions_generalesSQL.php');

if ( $_POST )
{
    $nom = $_POST[ 'nom' ];
    echo "tu t'appeles : $nom<br>";
    if ( $nom != "" )
    {
        $req = "INSERT INTO fouad.SQL_USERS_INJECTION (nom) values ('$nom');";
        echo "$req<br>"
;        executeSQL( $req );
    }
}

?>



<form action="SQL_INJECTION.php" method="POST">
    <input type="text" name="nom" placeholder="saisie ton nom"> 
    <input type="submit" value="OK"> 
</form>