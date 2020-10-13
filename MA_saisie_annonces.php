 <?php

function saisie_annonce()
{
    if( $_POST ) 
        if( isset($_POST['titre']) && $_POST['titre'] != "") 
        {
            $titre = $_POST['titre'];
            $prix = $_POST['prix'];
            $description = $_POST['description'];
            $image = $_POST['image'];

            
            //echo "titre : $titre<br>\n";

            return( [ $titre, $description, $image, $prix,0 ,0 ]  );  
        }
    return NULL;
}


function form_annonce( $cible )
{
    echo "<form method=\"POST\" action=\"$cible\">\n";
    echo "    <input type=\"text\" name=\"titre\" placeholder=\"Inserer mon titre\">\n";
    echo "    <input type=\"text\" name=\"description\" placeholder=\"description\">\n";
    echo "    <input type=\"text\" name=\"image\" placeholder=\"lien d'une image\">\n";
    echo "    <textarea name=\"prix\" row=\"10\"placeholder='Inserer votre prix'></textarea>\n";
    echo "    <input type='submit' name=\"envoi\" value=\"valider\">\n";
    echo "</form>\n";
}


?>