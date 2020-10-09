<?php
include ('fonction_gene_annonce.php');
//include ('page_membre_annonce.php');


<<<<<<< HEAD
setHeaderNoCache();
gestionSession();

class Annonce 
=======

class Annonce
>>>>>>> master
{
	public       $titre;
	public $description;
	public       $image;
	public        $prix;


<<<<<<< HEAD

	public function __construct($tit, $desc, $img, $pr )
=======
	public function __construct( )
>>>>>>> master
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

<<<<<<< HEAD
	}
=======

>>>>>>> master
	public function show()
	{
		//echo "<h3>section ".$this->section."</h3>\n";	
		echo "<h2>".$this->titre."</h2>\n";	
		echo "<p>".$this->description."</p>\n";
		echo "<img src='" .$this->image."'  width='150' height='150' >" ;
		echo "<br><strong>".$this->prix."€uros</strong>\n";
	}

<<<<<<< HEAD
	

class Bateau extends Annonce
{
	private $longueur;

	public function __construct( $tit, $desc, $img, $longueur, $pr )
=======

	public function save()
>>>>>>> master
	{
		GLOBAL $annonce; 
		array_push( $annonce, $this);
		$_SESSION[ 'annonce' ] = $annonce;
	}


	/*public function affiche()
	{
		return "pseudo : ".$this->pseudo." mail : ".$this->mail." dep : ".$this->dep."<br>\n" ;
	}
	*/

<<<<<<< HEAD
}

class voiture extends Annonce
{
	private $puissance;	

	public function __construct( $tit, $desc, $img, $p, $pr )
=======
	public function form($cible)
>>>>>>> master
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


<<<<<<< HEAD
	public function __construct( $tit, $desc, $img, $p, $pr )
	{
		parent::__construct( $tit, $desc, $img, $pr );
	   	$this->puissance=$p;
		$this->section    =  "moto";
		$this->description .= 	"<br>puissance : $p CV<br>\n";
	}  
	
	
	public function show()
	{
		echo "<h2>2roues</h2>\n";
		parent::show();
		echo "<br>cylindre :".$this->cylindre."cv<br>\n";
	}
}





$a1 = new Annonce( 		"super Maison"	, 
						"une belle maison de charme {11 Pièces,7 Chambres Terrain de 16953 m² Piscine 1 Terrasse,	769 000 €}",
						 "https://i.pinimg.com/564x/4d/58/f0/4d58f0daa45792580dddca3b28fe04fb.jpg",
						 400
					);

$b1 = new Bateau( 		"voilier"	, 
						"un super Bateau...",	        
						"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ7LFvZf3CC8Ue0Rt8IfTiPa79QChf4JHPEpw&usqp=CAU",
						12, 
						200
					);

$v1 = new Voiture(  	"Bugatti"  , 
						" une super voiture ....",     
						"https://cap.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fcap.2F2019.2F10.2F23.2F50e48e37-e7a4-42ff-adb4-487b0e750368.2Ejpeg/750x375/background-color/ffffff/focus-point/889%2C618/quality/70/lexus-devoile-sa-vision-de-la-voiture-du-futur-a-lhorizon-2030-1353540.jpg",
						150,
						1254 );

$M1 = new Moto(     	"Kawasaki" , 
						" une belle Moto........",        
						"https://storage.kawasaki.eu/public/kawasaki.eu/en-EU/model/2020_Ninja%20650_GN1_STU.003.png", 
						120,
						300);

$a1->show(); 
$b1->show();
$v1->show();
$m1->show(); 
$b1->changeDescription( "à moteur de 99CV" );


$tableau = array();

array_push( $tableau, $a1 );
array_push( $tableau, $b1 );
array_push( $tableau, $v1 );
array_push( $tableau, $M1 );

foreach ($tableau as $obj ) 
{
	$obj->show();
}
=======
}


>>>>>>> master
?>
