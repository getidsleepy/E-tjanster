<?php
	session_start();
	session_destroy();
	//denna fil består endast av php och genomför en utloggning(förstör sessionen)
	header("location: login.html");
?>