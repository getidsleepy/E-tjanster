<?php
	//Sök efter någon pryl i alla kategorier

	require database.php;
	
	$uppkoppling = connect();
	
	$sak = $_POST['search'];
	
	$annonser = GetAddsAll($sak);


	
?>