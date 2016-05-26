<?php//myprofile
/*

	session_start();
	require 'database.php';
	
	
	*/
	


?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Min profil</title>
</head>
<body>



	<h1>Intresseanmälningar du fått!</h1>
	
	<?php
		session_start();		
		$inlogg =  $_SESSION['username'];
		echo $inlogg;
		require 'database.php';
	
		$Texts = GetInterest($inlogg);
		
		if ($Texts->num_rows > 0) 
				{
					//Nu är det avsändaren som ska visas som den som skrivit kommentaren, gör därför så att användarnamn och ev email syns istället för namn
					while($row = $Texts->fetch_assoc()) 
					{
						echo  $row["Object"];

						//Vi behöver ett form för varje annons
						
						
						
					}
				}
		
		
		
		//Hur får vi tag i aktuell användare, jo vi använder session
		
		
		/*
		$intressent = $_POST['lånare'];
		$annonsör = $_POST['Utlånare'];
		*/
		
		
	?>
	<form action="cleanprocess.php" method="POST" >
		<input type="hidden" name="rensa" value="<?php echo $_SESSION['username'] ?>">
		<button type="submit">Rensa intresseanmälningar</button>
		
	</form>
 <!--	<button onclick="return delete();" ></button> -->

</body>
</html>