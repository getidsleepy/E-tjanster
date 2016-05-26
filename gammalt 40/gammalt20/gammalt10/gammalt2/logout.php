<?php
	session_start();
	session_destroy();
	setcookie(session_name(), "", time() - 3600);
	//denna fil består endast av php och genomför en utloggning(förstör sessionen)
	header("location: login.html");
?>