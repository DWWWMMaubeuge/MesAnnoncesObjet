<?php

class Vehicule
{
	private $type;
	private $marque;
	static $nbrVehicule=0;

	public function __construct( $t, $m="none" )
	{
		$this->type = $t;
		$this->marque = $m;
		Vehicule::$nbrVehicule++;
	}

	public function __destruct( )
	{
		Vehicule::$nbrVehicule--;
	}

	public function deplacer()
	{
		echo "je suis un ".$this->type."(".$this->marque."), je me deplace<br>";
	}

	public function arreter()
	{
		echo "je suis un ".$this->type."(".$this->marque."), je m'arrete<br>";
	}

	public function revision()
	{
		echo "revision<br>";
	}
 
	public function setMarque( $m )
	{
		$this->marque = $m;
	}

	public function  getMarque()
	{
		return $this->marque;
	}
}


class Voiture extends Vehicule
{
	public function __construct( $m )
	{
		parent::__construct( "voiture", $m );
	}

	public function deplacer()
	{
		parent::deplacer();
		echo "- - je tourne la clé<br>";
	}

	public function arreter()
	{
		parent::arreter();
		echo "- - j'appuie sur la pédale de frein<br>";
	}

	public function revision()
	{
		echo "- - revision : CT<br>";
	}
}

class Velo extends Vehicule
{
	public function __construct( $m )
	{
		parent::__construct( "Velo", $m );	
	}

	public function deplacer()
	{
		parent::deplacer();
		echo "- - j'appuie sur les pédales<br>";
	}

	public function arreter()
	{
		parent::arreter();
		echo "- - je serre les freins<br>";
	}

	public function revision()
	{
		echo "- - revision : graissage<br>";
	}
}

class Bateau extends Vehicule
{
	public function __construct( $m )
	{
		parent::__construct( "Bateau", $m );	
	}

	public function deplacer()
	{
		parent::deplacer();
		echo "- - je rame<br>";
	}

	public function arreter()
	{
		parent::arreter();
		echo "- - je jette l'ancre<br>";
	}
}


class Avion extends Vehicule
{
	public function __construct( $m )
	{
		parent::__construct( "Avion", $m );
	}
	
	public function deplacer()
	{
		parent::deplacer();
		echo "- - je vole<br>";
	}

	public function arreter()
	{
		parent::arreter();
		echo "- - je me pose<br>";
	}
}



$v1 = new Voiture( "BM" );
$b1 = new Bateau( "janneau");
$c1 = new Velo( "Btwin");	
$a1 = new Avion( "airbus");	
	

for ( $a = 0 ; $a < 10 ; $a++) 
	new Avion( "airbus");



$flotte = [ $a1, $v1, $b1, $c1 ];
foreach ($flotte as $v ) 
{
	$v->deplacer();
}
echo "=========<br>";
foreach ($flotte as $v ) 
{
	$v->arreter();
}

echo "=========<br>";
foreach ($flotte as $v ) 
{
	$v->revision();
}


echo "nombre de vehicule ".Vehicule::$nbrVehicule."<br>";

$v1 = "toto";

echo "nombre de vehicule ".Vehicule::$nbrVehicule."<br>";



















?>




