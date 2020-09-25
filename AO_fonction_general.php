<?php

//include ('fonction_gene_annonce.php');

class Annonce
{
	private $titre;
	private $description;
	private  $image;
	public $prix;

	public function __construct(  )
	{
		
	}
	
	public function parsePost( )
	{
		if ( isset($_POST['titre']) )
			$this->titre = $_POST['titre'];

		if ( isset($_POST['description']) ) 
			$this->description = $_POST['description'];

		if ( isset($_POST['image']) ) 
            $this->image= $_POST['image'];

        if ( isset($_POST['prix']) ) 
			$this->prix = $_POST['prix'];

	} 


	public function show()
	{
		echo "<h2>".$this->titre."</h2>\n";
		echo "<h3>".$this->prix."euro</h3>\n";
		echo "<p>".$this->description."</p>\n";	
		echo "<img src='".$this->image." 'width='150' height='150'>";
		
	}
	public function save()
	{
		GLOBAL $annonces; 
		array_push( $annonces, $this);
		$_SESSION[ 'annonces' ] = $annonces;
	}

	public function form($cible)
	{
		$str = "<form method=\"POST\" action=\"$cible\">\n";
		$str .=  "<input type=\"text\" name=\"titre\" placeholder=\"Inserer mon titre\">\n";
		$str .= "    <input type=\"number\" name=\"prix\" placeholder=\"prix\">\n";
		$str .= "    <input type=\"text\" name=\"image\" placeholder=\"lien d'une image\">\n";
		$str .= "    <textarea name=\"description\" row=\"10\"placeholder='Inserer votre description'></textarea>\n";
		$str .= "    <input type='submit' name=\"envoi\" value=\"Envoyer\">\n";
		$str .= "</form>\n";
		return $str;


	}
}

function setHeaderNoCache()
{
	GLOBAL $__URL_local;

	echo "<DOCTYPE html>\n";
	echo "<html>\n";
	echo "<head>\n";
	echo "<meta http-equiv=\"Cache-Control\" content=\"no-cache, no-store, must-revalidate\" />\n";
	echo "<meta http-equiv=\"Pragma\" content=\"no-cache\" />\n";
	echo "<meta http-equiv=\"Expires\" content=\"0\" />\n";
	//echo "<link href=\"annonce.css\" rel=\"stylesheet\">\n";
	//echo "<link href=\"formulaire.css\" rel=\"stylesheet\">\n";

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
		$annonces= array();
		$_SESSION["annonces"] = $annonces;
	}	
}





?>
