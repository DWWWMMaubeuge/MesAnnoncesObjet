<?php

class Annonce
{
	private       	$titre;
	protected 		$description;
	private       	$image;
	private       	$prix;
	
	public function show()
	{
	
		echo "<h2>".$this->titre."</h2>\n";	
		echo "<p>".$this->description."</p>\n";
		echo "<img src='" .$this->image."'  width='150' height='150' >" ;
		echo "<br><strong>".$this->prix."€uros</strong>\n";
	}


public function formAnnonce( $cible )
{
	echo "<form method=\"POST\" action=\"$cible\">\n";
    echo "    <input type=\"text\" name=\"titre\" placeholder=\"Inserer mon titre\">\n";
    echo "    <input type=\"number\" name=\"prix\" placeholder=\"prix\">\n";
    echo "    <input type=\"text\" name=\"image\" placeholder=\"lien d'une image\">\n";
    echo "    <textarea name=\"description\" row=\"10\"placeholder='Inserer votre description'></textarea>\n";
    echo "    <input type='submit' name=\"envoi\" value=\"Envoyer\">\n";
    echo "</form>\n";
}

public function parsePost()
	{
		if ( isset($_POST['titre']) )
			$this->titre = $_POST['titre'];

		if ( isset($_POST['descritpion']) ) 
			$this->description = $_POST['description'];

		if ( isset($_POST['prix']) ) 
			$this->prix = $_POST['prix'];

		if ( isset($_POST['image']) ) 
			$this->image = $_POST['image'];
	} 


	public function save()
	{
		GLOBAL $annonces; 
		array_push( $annonces, $this);
		$_SESSION[ 'annonces' ] = $annonces;
	}


}

//fin de class

function setHeaderNoCache()
{
	GLOBAL $__URL_local;

	echo "<DOCTYPE html>\n";
	echo "<html>\n";
	echo "<head>\n";
	echo "<meta http-equiv=\"Cache-Control\" content=\"no-cache, no-store, must-revalidate\" />\n";
	echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />\n";
	echo "<meta http-equiv=\"Expires\" content=\"0\" />\n";
	echo "<link href=\"annonce.css\" rel=\"stylesheet\">\n";
	echo "<link href=\"formulaire.css\" rel=\"stylesheet\">\n";
	echo "<script>\n";
	echo "function goAffGrand( id )\n";
	//echo "{ window.location.replace(\"http://localhost$__URL_local/affiche_grand.php?IDAnnonce=\"+id );}\n";
	echo "{ window.location.href=\"http://localhost$__URL_local/affiche_grand.php?IDAnnonce=\"+id ;}\n";

	echo "function goAccueil( )\n";
	//echo "{ window.location.replace(\"http://localhost$__URL_local/affiche_grand.php?IDAnnonce=\"+id );}\n";
	echo "{ window.location.href=\"http://localhost$__URL_local/accueil.php\" ;}\n";

	echo "</script>\n";
	echo "</head>\n";
	echo "<body>\n";
}



// gestion de la session
function gestionSession()
{
	GLOBAL $annonces;

	session_start();

	// dictionaire contenant nos annonce
	if ( isset($_SESSION["annonces"]) )
	{
		//echo "session exist<br>\n";
		$annonces = $_SESSION["annonces"];
	}
	else
	{	
		//echo "nouvelle session<br>\n";
		$annonces = array();
		$_SESSION["annonces"] = $annonces;
	}	
}




?>
