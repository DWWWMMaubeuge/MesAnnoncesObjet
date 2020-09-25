<?php

class Annonce 
{
	public 		$title;
	public 		$description;
	public  	$image;
	public  	$prix;
	public      $descriptionSup;

	public function __construct( )
	{
	} 

	public function parsePost( )
	{
		$this->title 		    = $this->getPOSTValue( 'title');
		$this->description	    = $this->getPOSTValue( 'description');
		$this->descriptionSup	= $this->getPOSTValue( 'descriptionPlus');
		$this->image 		    = $this->getPOSTValue( 'image');
		$this->prix 		    = $this->getPOSTValue( 'prix' ); 
	} 

	private function getPOSTValue( $key )
	{
		if ( isset($_POST[ $key ]) ) 
			return $_POST[ $key ];
		return null;
	}


	public function save()
	{
		GLOBAL $annonces; 
		array_push( $annonces, $this);
		$_SESSION[ 'annonces' ] = $annonces;
	}


	public function show()
	{
		
		echo "<h2>".$this->title."</h2>\n";	
		echo "<p>".$this->description."</p>\n";
		echo "<p>".$this->descriptionSup."</p>\n";
		echo "<img src='" .$this->image."'  width='150' height='150' >" ;
		echo "<br><strong>".$this->prix."€uros</strong>\n";
	}


	public function form( $cible )
	{
		$str  = '';
		$str .= '<h2>enregistrer annonce</h2><br>';    
		$str .= '<div class="saisie_annonce">';
		$str .= '<form id="form_annonce" method="POST" action="'.$cible.'"> ';   

		$str .= '<label><b>titre</b></label> ';  
		$str .= '<input type="text" name="title" id="form_title" placeholder="titre annonce"> ';    

		$str .= '<label><b>description</b></label>';
		$str .= '<input type="text" name="description" id="form_description" placeholder="description">    ';

		$str .= '<label><b>description</b></label>';
		$str .= '<input type="text" name="descriptionSup" id="form_description_plus" placeholder="descriptionSup">    ';

		$str .= '<label><b>lien image</b></label>';
		$str .= '<input type="text" name="image" id="form_image" placeholder="lien image"> ';   

		$str .= '<label><b>prix</b></label>';
		$str .= '<input type="text" name="prix" id="form_prix" placeholder="prix"> ';   
		$str .= '<br><br>    ';
		$str .= '<input type="submit" name="ok" id="log" value="OK">       ';
		$str .= '</form>     ';
		$str .= '</div>    ';
		return $str; 
	}
}



class Immobilier extends Annonce
{

	private $surface;
	private $nbrPieces;



	public function __construct( )
	{
		$this->surface = 65;
		$this->nbrPieces = 4;
	} 


	public function show()
	{
		parent::show();
		echo "<p>".$this->surface." m2</p>\n";
		echo "<p>".$this->nbrPieces." pièces</p>\n";
	}
}


















































function setHeaderNoCache()
{
	GLOBAL $__URL_local;

	echo "<DOCTYPE html>\n";
	echo "<html>\n";
	echo "<head>\n";

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