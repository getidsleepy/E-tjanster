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

	function GetAddsAll($Pryl)
	{
		$mysqli = connect();
		return $mysqli->query("SELECT *  FROM Annonser WHERE Thing LIKE '%$Pryl%'");
	}
	
	function InsertAdd($Kategori, $Pryl, $Bild, $Beskrivning, $Annonsör, $Dagar) 
	{
		$mysqli = connect();
		
		return $mysqli->query("INSERT INTO Annonser (Thing,Picture,Description, Advertiser, Category, Days)VALUES ('$Pryl','$Bild','$Beskrivning','$Annonsör', '$Kategori', '$Dagar')");
		
	}


?>