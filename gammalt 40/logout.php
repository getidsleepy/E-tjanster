<?php
	session_start();
	session_destroy();
	session_unset();
	//denna fil består endast av php och genomför en utloggning(förstör sessionen)
	header("location: index.php");
?>