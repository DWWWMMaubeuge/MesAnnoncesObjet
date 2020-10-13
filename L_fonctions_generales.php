<?php

class User 
{
	public $pseudo;
	public $mail;
	public  $pwd;
	public  $dep;


	public function __construct( )
	{
	} 

	public function parsePost( )
	{
		if ( isset($_POST['login']) )
			$this->pseudo = $_POST['login'];

		if ( isset($_POST['pwd']) ) 
			$this->pwd = $_POST['pwd'];

		if ( isset($_POST['mail']) ) 
			$this->mail = $_POST['mail'];

		if ( isset($_POST['dep']) ) 
			$this->dep = $_POST['dep'];
	} 


	public function show()
	{
		echo "<h3>section ".$this->section."</h3>\n";	
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


	public function affiche()
	{
		return "pseudo : ".$this->pseudo." mail : ".$this->mail." dep : ".$this->dep."<br>\n" ;
	}

	public function checkPwd()
	{
		$users = $_SESSION[ 'users' ];
		foreach ($users as $user ) 
		{
			if ( $user->pseudo == $this->pseudo && $user->pwd == $this->pwd )
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

	public function formLogin()
	{
		$str  = '';
		$str .= '<h2>inscription</h2><br>';    
		$str .= '<div class="login">    ';
		$str .= '<form id="login" method="POST" action="login.php"> ';   
		$str .= '<label><b>User Name     ';
		$str .= '</b>    ';
		$str .= '</label>  ';  
		$str .= '<input type="text" name="login" id="Uname" placeholder="Username"> ';    
		$str .= '<label><b>Password';     
		$str .= '</b>    ';
		$str .= '</label>    ';
		$str .= '<input type="Password" name="pwd" id="Pass" placeholder="Password"> ';   
		$str .= '<br><br>    ';
		$str .= '<input type="submit" name="ok" id="log" value="Log In Here">       ';
		$str .= '<span>Remember me</span> ';   
		$str .= '<br><br>    ';
		$str .= 'Forgot <a href="#">Password</a> ';   
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






function form_annonce( $cible )
{
    echo "<form method=\"POST\" action=\"$cible\">\n";
    echo "    <input type=\"text\" name=\"titre\" placeholder=\"Inserer mon titre\">\n";
    echo "    <input type=\"number\" name=\"prix\" placeholder=\"prix\">\n";
    echo "    <input type=\"text\" name=\"image\" placeholder=\"lien d'une image\">\n";
    echo "    <textarea name=\"description\" row=\"10\"placeholder='Inserer votre description'></textarea>\n";
    echo "    <input type='submit' name=\"envoi\" value=\"Envoyer\">\n";
    echo "</form>\n";
}














// gestion de la session
function gestionSession()
{
	GLOBAL $users;

	session_start();

	// dictionaire contenant nos annonce
	if ( isset($_SESSION["users"]) )
	{
		//echo "session exist<br>\n";
		$users = $_SESSION["users"];
	}
	else
	{	
		//echo "nouvelle session<br>\n";
		$users = array();
		$_SESSION["users"] = $users;
	}	
}

?>