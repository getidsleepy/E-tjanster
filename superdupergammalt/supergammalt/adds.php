<?php
	//Sök efter någon pryl i alla kategorier
	session_start();
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
<h1>Alla annonser</h1>

 
	<?php
	
	
	
			
		
	
			$annonser = GetAll();
			
			
			if ($annonser->num_rows > 0) 
				{
					//Nu är det avsändaren som ska visas som den som skrivit kommentaren, gör därför så att användarnamn och ev email syns istället för namn
					while($row = $annonser->fetch_assoc()) 
					{
						$bild = $row["Picture"];
						echo '<div class="commentbox">' . 'Pryl: ' . $row["Thing"] . '<br>'. 'Bild: ' . '<div class="previewimg">' . '<img src="'.$bild.'">' . '</div>' . '<br>' . 'Beskrivning: ' . $row["Description"] . '<br>' . 'Annonsör: ' . $row["Advertiser"] . '<br>' . 'Kategori: ' . $row["Category"] . '<br>' . '<br>' .'</div>';

					}
				}
		
		
		
	
	
	?>

<?php

$echo = $_SESSION['betal'];

echo $echo;

if(isset($_SESSION['betal'])):
?>
	<a href="intresse.php" >Gör intreseanmälan</a>
<?php
endif;
?>

</body>
</html>











