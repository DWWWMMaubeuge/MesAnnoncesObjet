<?php

class AnnonceSQL
{
	public 		$titre;
	public 		$description;
	public  	$image;
	public  	$prix;

	public 		$descriptionAffichage;


	public 		$strFormHead;
	public 		$strFormField;
	public 		$strFormEnd;

	public $sqlRequest;


	public function __construct( )
	{
	} 

	public function parsePost( )
	{
		$this->description	= $this->getPOSTValue( 'description');
		$this->titre 		= $this->getPOSTValue( 'titre');
		$this->image 		= $this->getPOSTValue( 'image');
		$this->prix 		= $this->getPOSTValue( 'prix' );
		$this->descriptionAffichage = $this->description; 
	} 

	public function readData( $array_kv )
	{
		$this->description	= $array_kv[ 'description' ];
		$this->titre 		= $array_kv[ 'titre' ];
		$this->image 		= $array_kv[ 'image' ];
		$this->prix 		= $array_kv[ 'prix'  ]; 
		$this->descriptionAffichage = $this->description; 
	} 

	protected function getPOSTValue( $key )
	{
		if ( isset($_POST[ $key ]) ) 
			return $_POST[ $key ];
		return null;
	}


	public function save()
	{
		$req = "INSERT INTO xavier.annonces ( typeannonce, titre, description, image, prix ) VALUES ( 'ANN', '".$this->titre."','".$this->description."','".$this->image."', ".$this->prix." );";
		return executeSQL( $req );
	}

	public function show()
	{
		//echo "<h3>section ".$this->section."</h3>\n";	
		echo "<h2>".$this->titre."</h2>\n";	
		echo "<p>".$this->descriptionAffichage."</p>\n";
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



class Immobilier extends AnnonceSQL
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
		$this->descriptionAffichage .= "<br>".$this->surface." m2<br>".$this->nbrPieces." pièces";	
	}


	public function form( $cible )
	{
		parent::form( $cible );
		$this->strFormField .= $this->createField( "surface du bien", "surface" ); 
		$this->strFormField .= $this->createField( "nombre de pièces", "nbrPieces" );
		return $this->strFormHead.$this->strFormField.$this->strFormEnd; 
	}

	public function readData( $array_kv )
	{
		parent::readData( $array_kv );
		$this->surface 		= $array_kv[ 'surface' ];
		$this->nbrPieces 	= $array_kv[ 'nbrpieces'  ]; 
		$this->descriptionAffichage .= "<br>".$this->surface." m2<br>".$this->nbrPieces." pièces";	  
	}

	public function save()
	{
		$req = "INSERT INTO xavier.annonces ( typeannonce, titre, description, image, prix, surface, nbrpieces ) VALUES ( 'IMO', '".$this->titre."','".$this->description."','".$this->image."', ".$this->prix.", ".$this->surface.", ".$this->nbrPieces."  );";
		return executeSQL( $req );
	}

}


class Voiture extends AnnonceSQL
{
	private $puissance;
	private $annee;
	private $marque;

	public function __construct( )
	{
		//$this->surface = 65;
		//$this->nbrPieces = 4;
	} 

	public function parsePOST()
	{
		parent::parsePOST();
		$this->puissance		= $this->getPOSTValue( 'puissance');
		$this->annee			= $this->getPOSTValue( 'annee');
		$this->marque			= $this->getPOSTValue( 'marque_voiture');
		$this->descriptionAffichage .= "<br>".$this->marque."<br>".$this->puissance." CV<br>".$this->annee."<br>";	
	}


	public function form( $cible )
	{
		parent::form( $cible );
		$req = "SELECT * FROM xavier.marque_voiture;"; 
		$result = executeSQL( $req );

		/*
		$radioButton = "";
		while ( $row = $result->fetch_assoc() )
		{	
			$radioButton .= "<input type=\"radio\" id=\"".$row[ 'id' ]."\" name=\"marque_voiture\" value=\"".$row[ 'nom' ]."\">\n";
			$radioButton .= " <label for=\"".$row[ 'nom' ]."\">".$row[ 'nom' ]."</label><br>\n";
		}
		*/

		$comboBox = "<select name=\"marque_voiture\" id=\"cars\">\n";
		while ( $row = $result->fetch_assoc() )
		{	
			$comboBox .= "<option value=\"".$row[ 'nom' ]."\">".$row[ 'nom' ]."</option>\n";

		}
		$comboBox .= "</select><br>\n";




		//$this->strFormField .= $this->createField( "marque", "marque" ); 
		$this->strFormField .= $comboBox; 
		$this->strFormField .= $this->createField( "puissance (CV)", "puissance" );
		$this->strFormField .= $this->createField( "année mise en circulation", "annee" );
		return $this->strFormHead.$this->strFormField.$this->strFormEnd; 
	}

	public function readData( $array_kv )
	{
		parent::readData( $array_kv );
		$this->puissance 		= $array_kv[ 'puissance' ];
		$this->annee 			= $array_kv[ 'annee'  ]; 
		$this->marque 			= $array_kv[ 'marque'  ]; 
		$this->descriptionAffichage .= "<br>".$this->marque."<br>".$this->puissance." CV<br>".$this->annee."<br>";	
	}

	public function save()
	{
		$req = "INSERT INTO xavier.annonces ( typeannonce, titre, description, image, prix, marque, puissance, annee ) VALUES ( 'CAR', '".$this->titre."','".$this->description."','".$this->image."', ".$this->prix.", '".$this->marque."', ".$this->puissance." , ".$this->annee." );";	
		return executeSQL( $req );
	}
}



class Voilier extends AnnonceSQL
{
	private $longueur;
	private $nbrMats;
	private $marque;
	private $typeVoilier;

	public function __construct( )
	{
		//$this->surface = 65;
		//$this->nbrPieces = 4;
	} 

	public function parsePOST()
	{
		parent::parsePOST();
		$this->longueur				= $this->getPOSTValue( 'longueur');
		$this->nbrMats				= $this->getPOSTValue( 'nbrMats');
		$this->annee				= $this->getPOSTValue( 'annee');
		$this->marque				= $this->getPOSTValue( 'marque_voilier');
		$this->type_voilier			= $this->getPOSTValue( 'type_voilier');
		$this->descriptionAffichage .= "<br>".$this->marque."<br>".$this->longueur." CV<br>".$this->nbrMats." mats<br>".$this->type_voilier."<br>".$this->annee."<br>";	
	}


	public function form( $cible )
	{
		parent::form( $cible );
		$req = "SELECT * FROM xavier.marque_bateau;"; 
		$result = executeSQL( $req );

		/*
		$radioButton = "";
		while ( $row = $result->fetch_assoc() )
		{	
			$radioButton .= "<input type=\"radio\" id=\"".$row[ 'id' ]."\" name=\"marque_voiture\" value=\"".$row[ 'nom' ]."\">\n";
			$radioButton .= " <label for=\"".$row[ 'nom' ]."\">".$row[ 'nom' ]."</label><br>\n";
		}
		*/

		$comboBoxMarque = "<select name=\"marque_voilier\" id=\"cars\">\n";
		while ( $row = $result->fetch_assoc() )
		{	
			$comboBoxMarque .= "<option value=\"".$row[ 'nom' ]."\">".$row[ 'nom' ]."</option>\n";

		}
		$comboBoxMarque .= "</select><br>\n";


		$req = "SELECT * FROM xavier.type_bateau;"; 
		$result = executeSQL( $req );


		$comboBoxType = "<select name=\"type_voilier\" >\n";
		while ( $row = $result->fetch_assoc() )
		{	
			$comboBoxType .= "<option value=\"".$row[ 'nom' ]."\">".$row[ 'nom' ]."</option>\n";

		}
		$comboBoxType .= "</select><br>\n";


		//$this->strFormField .= $this->createField( "marque", "marque" ); 
		$this->strFormField .= $comboBoxMarque; 
		$this->strFormField .= $comboBoxType; 
		$this->strFormField .= $this->createField( "longueur", "longueur" );
		$this->strFormField .= $this->createField( "nombre de mats", "nbrMats" );
		$this->strFormField .= $this->createField( "année mise à l'eau", "annee" );
		return $this->strFormHead.$this->strFormField.$this->strFormEnd; 
	}

	public function readData( $array_kv )
	{
		parent::readData( $array_kv );
		$this->longueur 		= $array_kv[ 'longueur' ];
		$this->type_voilier 	= $array_kv[ 'type_voilier' ];
		$this->nbrMats 			= $array_kv[ 'nbrmats' ];
		$this->annee 			= $array_kv[ 'annee'  ]; 
		$this->marque 			= $array_kv[ 'marque'  ]; 
		$this->descriptionAffichage .= "<br>".$this->marque."<br>".$this->longueur." CV<br>".$this->nbrMats." mats<br>".$this->type_voilier."<br>".$this->annee."<br>";	
	}

	public function save()
	{
		$req = "INSERT INTO xavier.annonces ( typeannonce, titre, description, image, prix, marque, longueur, type_bateau, nbrmats, annee ) VALUES ( 'VOI', '".$this->titre."','".$this->description."','".$this->image."', ".$this->prix.", '".$this->marque."', ".$this->longueur." ,'".$this->type_voilier."', ".$this->nbrMats.", ".$this->annee." );";	
		return executeSQL( $req );
	}
}






class Animaux extends AnnonceSQL
{
	private $race;  
	private $espèce;

	public function __construct( )
	{
		//$this->surface = 65;
		//$this->nbrPieces = 4;
	} 

	public function parsePOST()
	{
		parent::parsePOST();
		$this->longueur				= $this->getPOSTValue( 'longueur');
		$this->nbrMats				= $this->getPOSTValue( 'nbrMats');
		$this->annee				= $this->getPOSTValue( 'annee');
		$this->marque				= $this->getPOSTValue( 'marque_voilier');
		$this->type_voilier			= $this->getPOSTValue( 'type_voilier');
		$this->descriptionAffichage .= "<br>".$this->marque."<br>".$this->longueur." CV<br>".$this->nbrMats." mats<br>".$this->type_voilier."<br>".$this->annee."<br>";	
	}


	public function form( $cible )
	{
		parent::form( $cible );
		$req = "SELECT * FROM xavier.espece_animale;"; 
		$result = executeSQL( $req );
		$comboBox = "<select name=\"espece\">\n";
		while ( $row = $result->fetch_assoc() )
			$comboBox .= "<option value=\"".$row[ 'nom' ]."\">".$row[ 'nom' ]."</option>\n";
		$comboBox .= "</select><br>\n";
		$this->strFormField .= $comboBox; 

		$req = "SELECT * FROM xavier.race_animale;"; 
		$result = executeSQL( $req );
		$comboBox = "<select name=\"race\" >\n";
		while ( $row = $result->fetch_assoc() )
			$comboBox .= "<option value=\"".$row[ 'nom' ]."\">".$row[ 'nom' ]."</option>\n";
		$comboBox .= "</select><br>\n";
		$this->strFormField .= $comboBox; 
		

		//$this->strFormField .= $this->createField( "marque", "marque" ); 
		$this->strFormField .= $this->createField( "année de naissance", "annee" );
		return $this->strFormHead.$this->strFormField.$this->strFormEnd; 
	}

	public function readData( $array_kv )
	{
		parent::readData( $array_kv );
		$this->longueur 		= $array_kv[ 'longueur' ];
		$this->type_voilier 	= $array_kv[ 'type_voilier' ];
		$this->nbrMats 			= $array_kv[ 'nbrmats' ];
		$this->annee 			= $array_kv[ 'annee'  ]; 
		$this->marque 			= $array_kv[ 'marque'  ]; 
		$this->descriptionAffichage .= "<br>".$this->marque."<br>".$this->longueur." CV<br>".$this->nbrMats." mats<br>".$this->type_voilier."<br>".$this->annee."<br>";	
	}

	public function save()
	{
		$req = "INSERT INTO xavier.annonces ( typeannonce, titre, description, image, prix, marque, longueur, type_bateau, nbrmats, annee ) VALUES ( 'VOI', '".$this->titre."','".$this->description."','".$this->image."', ".$this->prix.", '".$this->marque."', ".$this->longueur." ,'".$this->type_voilier."', ".$this->nbrMats.", ".$this->annee." );";	
		return executeSQL( $req );
	}
}






































function executeSQL( $req )
{
	$result = false;
	if ( $req != "" )
	{
		$servername = "10.115.49.73";
		$username = "xavier";
		$password = "xavier";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) 
		{
		  die("Connection failed: " . $conn->connect_error);
		}


		echo $req."<br>";
		$result = $conn->query( $req );
		if ($conn->error) 
		{
		  die("erreur insert: " . $conn->error);
		}

		$conn->close();
	}
	return $result;
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