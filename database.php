<?php 

//Denna php fil samlar allt databasrelaterat, ex alla funktioner/metoder, insättningar, hämtningar
//Alla tabellnamn:
//Annonser
//Anv
//Comments

	function connect()
	{
		$mysqli = new mysqli('dbtrain.im.uu.se', 'dbtrain_240', 'tpblpn', 'dbtrain_240');
	
		$error = $mysqli->connect_error;
		if ($error) {
			$code  = $mysqli->connect_errno;
			die("Error: ($code) $error");
		}
		return $mysqli;
		
	}

	
	function GetCategory($category)
	{
		
		$mysqli = connect();
		return $mysqli->query("SELECT *  FROM Annonser WHERE Category = '$category'");
	
	}
	function DeleteAdd($addID)
	{
		$mysqli = connect();
		return $mysqli->query("DELETE FROM Annonser WHERE ID = '$addID'");
		
		//DELETE FROM table_name
		//WHERE some_column=some_value;
		
	}
	
	function DeleteInterest($advertiser)
	{
		$mysqli = connect();
		return $mysqli->query("DELETE FROM Intresse WHERE Advertiser = '$advertiser'");
	
	}
	
	
	function EditAdd()
	{
	
	
	
	}
	
	function GetAllUsers()
	{
	
		$mysqli = connect();
		return $mysqli->query("SELECT *  FROM Anv");
	
	
	}
	
	function GetAdmin()
	{
	
		$mysqli = connect();
		return $mysqli->query("SELECT *  FROM Admin");
	
	
	}
	
	function GetAddsAll($Pryl)
	{
		$mysqli = connect();
		return $mysqli->query("SELECT *  FROM Annonser WHERE Thing LIKE '%$Pryl%'");
	}
	
	function GetProfAdds($User)
	{
		$mysqli = connect();
		return $mysqli->query("SELECT *  FROM Annonser WHERE Advertiser = '$User' ");

	
	
	}
	
	function GetAll()
	{
		$mysqli = connect();
		return $mysqli->query("SELECT *  FROM Annonser");

	
	
	}
	
	function GetUserLogin($DB, $Kolumn, $Is) 
	{
		$mysqli = connect();
		return $mysqli->query("SELECT * FROM $DB WHERE $Kolumn = '$Is'");
	}
	
	
	function InsertAdd($Kategori, $Pryl, $Bild, $Beskrivning, $Annonsör, $Dagar) 
	{
		$mysqli = connect();
		
		return $mysqli->query("INSERT INTO Annonser (Thing,Picture,Description, Advertiser, Category, Days)VALUES ('$Pryl','$Bild','$Beskrivning','$Annonsör', '$Kategori', '$Dagar')");
		
	}
	
	function InsertIntrest($intressent, $objekt, $text, $annonsör)
	{
		$mysqli = connect();
		
		return $mysqli->query("INSERT INTO Intresse (Advertiser,Object,Text, Stakeholder)VALUES ('$annonsör','$objekt','$text','$intressent')");
		
		
		
	
	}
	
	function InsertUSER($user, $password, $email, $phone)
	{
		$mysqli = connect();
		
		return $mysqli->query("INSERT INTO Anv (Username,Password,Email, Tele)VALUES ('$user','$password','$email','$phone')");
		
		//Username	Password	Email	Personnummer	Firstname	Lastname	Adress	Stad	Postnummer	Tele
		
	
	}

	function GetProfile($anvNamn)
	{
		$mysqli = connect();
		return $mysqli->query("SELECT * FROM Anv WHERE Username = '$anvNamn' ");
	}

	function GetInterest($Adv)
	{
		$mysqli = connect();
		return $mysqli->query("SELECT * FROM Intresse WHERE Advertiser = '$Adv' ");
	
	}
	
?>