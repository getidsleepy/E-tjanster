
<!-- Här ser man sin profil och kan: uppgradera till utlånarfunktion
subscription.php(här visas betalningssidan där man kan välja betalningsalternativ
subscriptionprocess.php(här “genomförs betalningen”)-->

<?php
/*
if(!isset($_SESSION['anv']) || $_SESSION['anv'] === "")
	{
		header('Location: login.php');
	}
*/
	session_start();
	require 'database.php';
	
	
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Profil</title>
</head>
<body>


		<?php
			
	
	
			$anvnamn = $_POST['Advertiser'];
		
	
			$profil = GetProfile($anvnamn);
			
			echo $anvnamn;
			if ($profil->num_rows > 0) 
				{
					//Nu är det avsändaren som ska visas som den som skrivit kommentaren, gör därför så att användarnamn och ev email syns istället för namn
					while($row = $profil->fetch_assoc()) 
					{
						
						echo '$anvnamn';

					}
				}
		
		
		
	
	
	?>


	

	<h1>Profil</h1>

	<p>Användarnamn</p>
	
	<p>Rank</p>
	
	<h2>Mina annonser</h2>
	
	<p>Telefonnummer?</p>
	
	
	
	
	<a href="subscription.php">Betala</a>

</body>
</html>