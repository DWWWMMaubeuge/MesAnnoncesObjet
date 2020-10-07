<?php

class Annonce 
{
	public 		$titre;
	public 		$description;
	public  	$image;
	public  	$prix;

	public 		$strFormHead;
	public 		$strFormField;
	public 		$strFormEnd;

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
		$this->surface = 65;
		$this->nbrPieces = 4;
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
	}
}

class Voiture extends Annonce
{
	private $marque;
	private $model;
	private $kilometrage;
	private $boite_de_vitesse;
	private $annees;
	private $puissanceFiscale;
	private $puissanceReelle;
	private $carburant;
	private $porte;
	private $places;
	private $mise_en_circulation;

	public function parsePOST()
	{
		parent::parsePOST();
		$this->marque		= $this->getPOSTValue( 'marque');
		$this->model	= $this->getPOSTValue( 'model');
		$this->kilometrage	= $this->getPOSTValue( 'kilometrage');
		$this->boite_de_vitesse	= $this->getPOSTValue( 'boite_de_vitesse');
		$this->annees	= $this->getPOSTValue( 'annees');
		$this->puissanceFiscale	= $this->getPOSTValue( 'puissanceFiscale');
		$this->puissanceReelle	= $this->getPOSTValue( 'puissanceReelle');
		$this->carburant	= $this->getPOSTValue( 'carburant');
		$this->porte	= $this->getPOSTValue( 'porte');
		$this->places	= $this->getPOSTValue( 'places');
		$this->mise_en_circulation	= $this->getPOSTValue( 'mise_en_circulation');
		$this->description .= "<br>".$this->marque."<br>".$this->model."<br>".$this->kilometrage."km<br>".$this->boite_de_vitesse." <br>".$this->annees." <br>".$this->puissanceFiscale."CV<br>".$this->puissanceReelle."Ch din<br>".$this->carburant." <br>".$this->porte." <br>".$this->places." <br>".$this->mise_en_circulation." <br>";	
	}


	public function form( $cible )
	{
		parent::form( $cible );

		$this->strFormField .= $this->createField( "marque", "marque" );
		$this->strFormField .= $this->createField( "model", "model" );
		$this->strFormField .= $this->createField( "kilometrage du bien", "kilometrage" );
		$this->strFormField .= $this->createField( "boite de vitesse", "boite_de_vitesse" );
		$this->strFormField .= $this->createField( "annees du bien", "annees" );
		$this->strFormField .= $this->createField( "puissanceFiscale du bien", "puissanceFiscale" );
		$this->strFormField .= $this->createField( "puissanceReelle", "puissanceReelle" );
		$this->strFormField .= $this->createField( "carburant", "carburant" );
		$this->strFormField .= $this->createField( "porte", "porte" );
		$this->strFormField .= $this->createField( "places", "places" );
		$this->strFormField .= $this->createField( "mise en circulation", "mise_en_circulation" );

		return $this->strFormHead.$this->strFormField.$this->strFormEnd; 
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