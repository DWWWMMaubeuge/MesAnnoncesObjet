<?php

class Annonce 
{
	public 		$titre;
	public 		$description;
	public  	$image;
	public  	$prix;
    

	public function __construct( )
	{
	} 

	public function parsePost( )
	{
		$this->description	= $this->getPOSTValue( 'description');
		$this->titre 		= $this->getPOSTValue( 'titre');
		$this->image 		= $this->getPOSTValue( 'image');
		$this->prix 		= $this->getPOSTValue( 'prix' ); 
	} 

	protected function getPOSTValue( $key )
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
		//echo "<h3>section ".$this->section."</h3>\n";	
		echo "<h2>".$this->titre."</h2>\n";	
		echo "<p>".$this->description."</p>\n";
		echo "<img src='" .$this->image."'  width='150' height='150' >" ;
		echo "<br><strong>".$this->prix."€uros</strong>\n";
	}


	protected function createField(  $label, $name )
	{
		//$ret  = "<label><b>$label</b></label>\n";  
		$ret ="<input type=\"text\" name=\"$name\" class=\"form_$name\" placeholder=\"$label\">\n";    
		$ret .="<br>\n";    
		return $ret;
	}


	public function form( $cible )
	{
		$this->strFormHead  = '<h2>enregistrer annonce</h2><br>';    
		$this->strFormHead .= '<div class="saisie_annonce">';
		$this->strFormHead .= '<form id="form_annonce" method="POST" action="'.$cible.'"> '; 

		$this->strFormField  = $this->createField( "titre de l annonce", "titre" );    
		$this->strFormField .= $this->createField( "description", "description" );    
		$this->strFormField .= $this->createField( "lien vers l image", "image" );    
		$this->strFormField .= $this->createField( "prix", "prix" );    

		$this->strFormEnd  = '<input type="submit" name="ok" id="log" value="OK">       ';
		$this->strFormEnd .= '</form>     ';
		$this->strFormEnd .= '</div>    ';

		return $this->strFormHead.$this->strFormField.$this->strFormEnd; 
	}
}



class Immobilier extends Annonce
{
	private $surface;
	private $nbrPieces;

	

	public function __construct( )
	
	{
		//$this->surface = 65;
		//$this->nbrPieces = 4;
	}  

	public function parsePOST()
	{
		parent::parsePOST();
		$this->surface		= $this->getPOSTValue( 'surface');
		$this->nbrPieces	= $this->getPOSTValue( 'nbrPieces');
		$this->description .= "<br>".$this->surface." m2<br>".$this->nbrPieces." pièces";	
	}


	public function form( $cible )
	{
		parent::form( $cible );

		$this->strFormField .= $this->createField( "surface du bien", "surface" );    
		$this->strFormField .= $this->createField( "nombre de pièces", "nbrPieces" );    

		return $this->strFormHead.$this->strFormField.$this->strFormEnd; 
	}

	public function show()
	{

	   
       parent::show();
		echo "<p>".$this->surface." m2</p>\n";
		echo "<p>".$this->nbrPieces." pièces</p>\n";

	}
}



class Moto extends Annonce
{
	private $type;
	private $cyl;
	private $ann;
	private $km;
	private $model;
	private $color;

	

	public function __construct( )
	
	{
		//$this->type = 65;
		//$this->cyl = 4;
		//$this->ann = 65;
		//$this->km = 4;
		//$this->model = 65;
		//$this->color = 4;
	}  

	public function parsePOST()
	{
		parent::parsePOST();
		$this->type		= $this->getPOSTValue( 'type');
		$this->cyl		= $this->getPOSTValue( 'cyl');
		$this->ann		= $this->getPOSTValue( 'ann');
		$this->km		= $this->getPOSTValue( 'km');
		$this->model	= $this->getPOSTValue( 'model');
		$this->color	= $this->getPOSTValue( 'color');
		$this->description .= "<br>".$this->type."<br>".$this->cyl."cm3<br>".$this->ann."<br>".$this->km."<br>".$this->model."<br>".$this->color."<br>";	
	}


	public function form( $cible )
	{
		parent::form( $cible );

		$this->strFormField .= $this->createField( "type de véhicule", "type" );    
		$this->strFormField .= $this->createField( "cylindrée", "cyl" );
		$this->strFormField .= $this->createField( "année de mise en circulation", "ann" );    
		$this->strFormField .= $this->createField( "nombre de km au compteur", "km" );
		$this->strFormField .= $this->createField( "marque et modèle", "model" );    
		$this->strFormField .= $this->createField( "couleur du véhicule", "color" );    

		return $this->strFormHead.$this->strFormField.$this->strFormEnd; 
	}

	public function show()
	{

	   
       parent::show();
		echo "<p>".$this->type."</p>\n";
		echo "<p>".$this->cyl." cm3</p>\n";
		echo "<p>".$this->ann."</p>\n";
		echo "<p>".$this->km."</p>\n";
		echo "<p>".$this->model."</p>\n";
		echo "<p>".$this->color."</p>\n";
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