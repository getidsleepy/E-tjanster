<?php
//Här processeras datan från newadd.php

		
		require 'database.php';
		$uppkoppling = connect();
		
	
		$pryl = $_POST['objekttolend'];
		$pryl = $uppkoppling->real_escape_string($pryl);

		$annonsör = "Roy";           //$_SESSION['username'];
		
		$kategori = $_POST['kategori'];
		
		$bilden = $_POST['bild'];
		
		$beskrivning = $_POST['beskrivning'];
		
		$dagar = $_POST['dagar'];
		
		
		//Nu visas inloggat användarnamn som den som publicerat
		$result = InsertAdd($kategori, $pryl, $bilden, $beskrivning, $annonsör, $dagar)
		//header('Location: adds.php');



	



	


?>