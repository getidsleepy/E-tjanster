<?php
//interestprocess.php


	session_start();
	require 'database.php';

	
	$intressent = $_POST['lånare'];
	$objekt = $_POST['obj'];
	$annonsör = $_POST['Utlånare'];
	$text = $_POST['text'];

	InsertIntrest($intressent, $objekt, $text, $annonsör);
	
	
?>