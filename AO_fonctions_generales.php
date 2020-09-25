<?php

<<<<<<< HEAD




class annonce
{
	public  $titre;
	public  $description;
	public  $image;
	public  $prix;
=======
class Annonce 
{
	public 		$title;
	public 		$description;
	public  	$image;
	public  	$prix;
>>>>>>> cecb566101f453b26ebe9c593783fe2328c34244


	public function __construct( )
	{
	} 

	public function parsePost( )
	{
<<<<<<< HEAD
		if ( isset($_POST['titre']) )
			$this->titre = $_POST['titre'];

		if ( isset($_POST['description']) ) 
			$this->description = $_POST['description'];

		if ( isset($_POST['image']) ) 
			$this->image= $_POST['image'];

		if ( isset($_POST['prix']) ) 
			$this->prix = $_POST['prix'];
	} 


	public function save()
	{
		GLOBAL $annonce; 
		array_push( $annonce, $this);
		$_SESSION[ 'annonce' ] = $annonce;
	}


	public function affiche()
	{
		return "maison : ".$this->maison." voiture: ".$this->voiture." bateau : ".$this->bateau."<br>\n" ;
	}

	public function checkPwd()
	{
		$users = $_SESSION[ 'annonce' ];
		foreach ($annonce as $annonce ) 
		{
			if ( $annonce->maison == $this->maison && $annonce->voiture== $this->voiture )
				return true;
		}
		return false;
	}

	public function form()
	{
		$str  = '';
		$str .= '<h2>inscription</h2><br>';    
		$str .= '<div class="login">    ';
		$str .= '<form id="login" method="POST" action="inscription.php"> ';   
		$str .= '<label><b>User Name     ';
		$str .= '</b>    ';
		$str .= '</label>  ';  
		$str .= '<input type="text" name="login" id="Uname" placeholder="Username"> ';    
		$str .= '<br><br>    ';
		$str .= '<label><b>User Mail';     
		$str .= '</b>    ';
		$str .= '</label>    ';
		$str .= '<input type="mail" name="mail" id="mail" placeholder="mail">    ';
		$str .= '<br><br>    ';
		$str .= '<label><b>User Dep';     
		$str .= '</b>    ';
		$str .= '</label>    ';
		$str .= '<input type="text" name="dep" id="dep" placeholder="departement"> ';   
		$str .= '<br><br>    ';
		$str .= '<label><b>Password';     
		$str .= '</b>    ';
		$str .= '</label>    ';
		$str .= '<input type="Password" name="pwd" id="Pass" placeholder="Password"> ';   
		$str .= '<br><br>    ';
		$str .= '<input type="submit" name="ok" id="log" value="Log In Here">       ';
=======
		$this->title 		= $this->getPOSTValue( 'title');
		$this->description	= $this->getPOSTValue( 'description');
		$this->image 		= $this->getPOSTValue( 'image');
		$this->prix 		= $this->getPOSTValue( 'prix' ); 
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
		//echo "<h3>section ".$this->section."</h3>\n";	
		echo "<h2>".$this->title."</h2>\n";	
		echo "<p>".$this->description."</p>\n";
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

		$str .= '<label><b>lien image</b></label>';
		$str .= '<input type="text" name="image" id="form_image" placeholder="lien image"> ';   

		$str .= '<label><b>prix</b></label>';
		$str .= '<input type="text" name="prix" id="form_prix" placeholder="prix"> ';   
		$str .= '<br><br>    ';
		$str .= '<input type="submit" name="ok" id="log" value="OK">       ';
>>>>>>> cecb566101f453b26ebe9c593783fe2328c34244
		$str .= '</form>     ';
		$str .= '</div>    ';
		return $str; 
	}
<<<<<<< HEAD
=======
}



class Immobilier extends Annonce
{

	private $surface;
	private $nbrPieces;



	public function __construct( )
	{
		$this->surface = 65;
		$this->nbrPieces = 4;

		$this->description .= "<p>".$this->surface." m2</p>"."<p>".$this->surface." m2</p>";   

	} 


	public function show()
	{
		parent::show();
		//echo "<p>".$this->surface." m2</p>\n";
		//echo "<p>".$this->surface." m2</p>
	}
}




>>>>>>> cecb566101f453b26ebe9c593783fe2328c34244






















<<<<<<< HEAD
=======


























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

>>>>>>> cecb566101f453b26ebe9c593783fe2328c34244
?>