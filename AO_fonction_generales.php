<?php

class Annonce
{
	public       $titre;
	public $description;
	public       $image;
	public        $prix;


	public function __construct( )
	{
	} 

	public function parsePost( )
	{
		if ( isset($_POST['titre']) )
			$this->titre = $_POST['titre'];

		if ( isset($_POST['description']) ) 
			$this->description = $_POST['description'];

		if ( isset($_POST['image']) ) 
			$this->image = $_POST['image'];

		if ( isset($_POST['prix']) ) 
			$this->prix = $_POST['prix'];
	} 


	public function show()
	{
		//echo "<h3>section ".$this->section."</h3>\n";	
		echo "<h2>".$this->titre."</h2>\n";	
		echo "<p>".$this->description."</p>\n";
		echo "<img src='" .$this->image."'  width='150' height='150' >" ;
		echo "<br><strong>".$this->prix."€uros</strong>\n";
	}


	public function save()
	{
		GLOBAL $annonces; 
		array_push( $annonces, $this);
		$_SESSION[ 'annonces' ] = $annonces;
	}


	/*public function affiche()
	{
		return "pseudo : ".$this->pseudo." mail : ".$this->mail." dep : ".$this->dep."<br>\n" ;
	}
	*/

	public function form($cible)
	{
		$str  = '';
		$str .= '<h2>Annonce</h2><br>';    
		$str .= '<div class="titre">    ';
		$str .= "<form id=\"login\" method=\"POST\" action=\"$cible\"> ";   
		$str .= '<label><b>titre    ';
		$str .= '</b>    ';
		$str .= '</label>  ';  
		$str .= '<input type="text" name="titre" id="Uname" placeholder="titre"> ';    
		$str .= '<br><br>    ';
		$str .= '<label><b>description';     
		$str .= '</b>    ';
		$str .= '</label>    ';
		$str .= '<input type="text" name="description" id="mail" placeholder="description">  ';
		$str .= '<br><br>    ';
		$str .= '<label><b>image';     
		$str .= '</b>    ';
		$str .= '</label>    ';
		$str .= '<input type="text" name="image" id="dep" placeholder="image"> ';   
		$str .= '<br><br>    ';
		$str .= '<label><b>prix';     
		$str .= '</b>    ';
		$str .= '</label>    ';
		$str .= '<input type="prix" name="prix" id="Pass" placeholder="prix"> ';   
		$str .= '<br><br>    ';
		$str .= '<input type="submit" name="ok" id="log" value="valider"> ';
		$str .= '</form>     ';
		$str .= '</div>    ';
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
	echo "<link href=\"annonce.css\" rel=\"stylesheet\">\n";
	//echo "<link href=\"formulaire.css\" rel=\"stylesheet\">\n";
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
