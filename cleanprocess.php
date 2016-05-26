<?php
//Cleanprocess, rensa upp intresseanmälningarna för användaren, närmare bestämt, ta bort dem.
			session_start();		

			require 'database.php';


	$toRemove = $_POST['rensa'];
	
	DeleteInterest($toRemove);
	
	header('Location: myprofile.php');
	
?>