<?php

class Annonce 
{
	public 		$titre;
	public 		$description;
	public 		$descriptionSupp;
	public  	$image;
	public  	$prix;

	public 		$strFormHead;
	public 		$strFormField;
	public 		$strFormEnd;


	public function __construct( )
	{
	
	} 

	public function parsePost( )
	{
		$this->description	= $this->getPOSTValue( 'description');
<<<<<<< HEAD
		$this->descriptionSupp	= $this->getPOSTValue( 'descriptionSupp');
=======
		$this->titre 		= $this->getPOSTValue( 'titre');
>>>>>>> cecb566101f453b26ebe9c593783fe2328c34244
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
		echo "<p>".$this->descriptionSupp."</p>\n";
		echo "<img src='" .$this->image."'  width='150' height='150' >" ;
		echo "<br><strong>".$this->prix."€uros</strong>\n";
	}


	protected function createField(  $label, $name )
	{
		//$ret  = "<label><b>$label</b></label>\n";  
		$ret .="<input type=\"text\" name=\"$name\" class=\"form_$name\" placeholder=\"$label\">\n";    
		$ret .="<br>\n";    
		return $ret;
	}


	public function form( $cible )
	{
<<<<<<< HEAD
		$str  = '';
		$str .= '<h2>enregistrer annonce</h2><br>';    
		$str .= '<div class="saisie_annonce">';
		$str .= '<form id="form_annonce" method="POST" action="'.$cible.'"> ';   

		$str .= '<label><b>Titre</b></label> ';  
		$str .= '<input type="text" name="title" id="form_title" placeholder="titre de l\'annonce"> ';    

		$str .= '<label><b>Description</b></label>';
		$str .= '<input type="text" name="description" id="form_description" placeholder="description">    ';

		$str .= '<label><b>Description +</b></label>';
		$str .= '<input type="text" name="descriptionSupp" id="form_description" placeholder="description supplémentaire">    ';

		$str .= '<label><b>Lien image</b></label>';
		$str .= '<input type="text" name="image" id="form_image" placeholder="lien image"> ';   

		$str .= '<label><b>Prix</b></label>';
		$str .= '<input type="text" name="prix" id="form_prix" placeholder="prix"> ';   
		$str .= '<br><br>    ';
		$str .= '<input type="submit" name="ok" id="log" value="OK">       ';
		$str .= '</form>     ';
		$str .= '</div>    ';
		return $str; 
=======
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
>>>>>>> cecb566101f453b26ebe9c593783fe2328c34244
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
<<<<<<< HEAD
		echo "<p>".$this->surface." m2</p>\n";
		echo "<p>".$this->nbrPieces." pièces</p>\n";
=======
>>>>>>> cecb566101f453b26ebe9c593783fe2328c34244
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