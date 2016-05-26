<?php
//Denna sida hanterar endast php och utför själva inloggningen

	require 'database.php';

	
	$anv = $_POST['username'];

	$användare =  GetUserLogin('Anv', 'Username', $anv);

	if ($användare->num_rows > 0)
	{
		$anvhm = $användare->fetch_assoc();
		$orgPassword = $anvhm['Password'];
		$checkPassword = $_POST['password'];
		
		
		if($orgPassword === $checkPassword)
		{
			//<script>Session ska startas</script>
			session_start();
			$_SESSION['username'] = $anvhm['Username'];
			//echo $_SESSION['username'];
			header('Location: index.php');
		}
		else
		{
			header('Location: login.php');
		}
	}
	else
	{
		header('Location: login.php');
	}


?>