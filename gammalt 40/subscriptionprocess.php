<?php
//Här genomförs betalning/processeras, denna fill är möjligen onödig och kan kanske tas bort, eftersom vi 
//inte kommer att implementera en autentisk betalningsfunktion




	session_start();
	$_SESSION['betal'] = "Betalat";
	header('Location: index.html');




?>