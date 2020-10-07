<?php

abstract Class Animal
{
	public $type;

	public function __construct( $type )
	{
		$this->type = $type;
	}

    public function jesuis()
    {
        echo "je suis ".$this->type."<br>";
    }

	public function deplacer()
	{
		echo $this->jesuis()."<br>";
        echo "je me deplace<br>";
        echo $this->pattes()."<br>";
	}

	public function mange()
	{
        echo "je mange <br>";
        echo $this->type_nourriture()."<br>";
	}

    abstract public function pattes();
	abstract public function type_nourriture();
	
}


Class Chat extends Animal
{
	public function __construct()
	{
		parent::__construct(  "un chat"  );
	}

	public function deplacer()
	{
		parent::deplacer();
		
	}

	public function mange()
	{
		parent::mange();
	
    }

    public function pattes()
	{
		echo "sur quattres pattes<br>";
	}

	public function type_nourriture()
	{
		echo "des croquettes<br>";
	}
}

Class Gecko extends Animal
{
	public function __construct()
	{
		parent::__construct(  "un gecko"  );
	}

	public function deplacer()
	{
		parent::deplacer();
	}

	public function mange()
	{
		parent::mange();
	
    }
    
    public function pattes()
	{
		echo "sur quattres pattes<br>";
    }
    
	public function type_nourriture()
	{
		echo "des grillons<br>";
	}
}

$chat = new Chat();
$gecko = new Gecko();

$chat->deplacer();
$chat->mange();

echo "<br>";

$gecko->deplacer();
$gecko->mange();


INSERT INTO Dinosaures ( Nom, Periode, Extinction )  VALUES ('Concavenator', 'Barrémien', -130, 6, 2.5 );