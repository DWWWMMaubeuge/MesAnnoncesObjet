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
		GLOBAL $annonce; 
		array_push( $annonce, $this);
		$_SESSION[ 'annonce' ] = $annonce;
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


?>
