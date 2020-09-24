<?php
include ( 'L_fonctions_generales.php');

setHeaderNoCache();
gestionSession();


$newUser = new User();

if ( isset($_POST['ok']) )
{
    $newUser->parsePost();
    if ( $newUser->checkPwd() )
    {    
        $_SESSION['user']  = $newUser;
        header ('location: page_membre.php');
    }
}
echo $newUser->formLogin();
?>
