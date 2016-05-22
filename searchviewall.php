<?php
	//Sök efter någon pryl i alla kategorier

	require 'database.php';
	
	
	

	
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="style/style.css">
    <title>Annonser</title>
</head>
<body>

	<?php
		
		$sak = $_POST['search'];
		
		$annonser = GetAddsAll($sak);

		
		if ($annonser->num_rows > 0) 
			{
				//Nu är det avsändaren som ska visas som den som skrivit kommentaren, gör därför så att användarnamn och ev email syns istället för namn
				while($row = $annonser->fetch_assoc()) 
				{
					echo '<div class="commentbox">' . 'Pryl: ' . $row["Thing"] . '<br>'. 'Bild: ' . $row["Picture"]. '<br>' . 'Beskrivning: ' . $row["Description"] . '<br>' . 'Annonsör: ' . $row["Advertiser"] . '<br>' . 'Kategori: ' . $row["Category"] . '<br>' . '<br>' .'</div>';

				}
			}
	
	
	?>







</body>
</html>