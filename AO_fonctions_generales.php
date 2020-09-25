<?php





class annonce
{
	public  $titre;
	public  $description;
	public  $image;
	public  $prix;


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
		$str .= '</form>     ';
		$str .= '</div>    ';
		return $str; 
	}






















?>