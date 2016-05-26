
<!-- på denna sida lägger man till ny annons, i newaddprocess, läggs den rent fysiskt till-->

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="style/style.css">
    <title>Ny annons</title>
</head>
<body>
<?php 

	session_start();
	if(!isset($_SESSION['username']) || $_SESSION['username'] === "")
	{
		header('Location: login.php');
	}
?>
	<div class="container-fluid">
		<div class="page-header">
		 	<h1>Skapa ny annons</h1>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<form id="newadd" action="newaddprocess.php" method="POST" onsubmit="" >
				<label for="objekt">Vad lånar du ut?</label>
				<input type="text" placeholder="Vad lånar du ut?" id="objekt" name="objekttolend" class="form-control"/>

				
				<label for="category">Vilken kategori tillhör objektet?</label>
					<div class="radio">
						<label><input type="radio" id="category"name="kategori" value="Verktyg & Maskiner">Verktyg & Maskiner</label>
					</div>
					<div class="radio">
						<label><input type="radio" id="category"name="kategori" value="Fordon">Fordon</label>
					</div>
					<div class="radio">
						<label><input type="radio" id="category"name="kategori" value="För hemmet">För hemmet</label>
					</div>
					<div class="radio">
						<label><input type="radio" id="category"name="kategori" value="Personligt">Personligt</label>
					</div>
					<div class="radio">
						<label><input type="radio" id="category"name="kategori" value="Elektronik">Elektronik</label>
					</div>
					<div class="radio">
						<label><input type="radio" id="category"name="kategori" value="Bostad">Bostad</label>
					</div>
					<div class="radio">
						<label><input type="radio" id="category"name="kategori" value="Fritid & Hobby">Fritid & Hobby</label>
					</div>
					<div class="radio">
						<label><input type="radio" id="category"name="kategori" value="Övrigt" text="Övrigt">Övrigt</label>
					</div>
				
				
				
				<!--<input type="text" placeholder="Kategori" id="category" name="kategori" class="form-control"/>-->
				
				<label for="time">Hur länge lånar du ut objektet som längst?</label>
				<input type="text" placeholder="Dagar" id="time" name="dagar" class="form-control"/>
					
				<label for="description">Beskrivning av objektet</label>
				<input type="text" placeholder="Beskrivning" id="description" name="beskrivning" class="form-control"/>
				
				<label for="picture">Bildlänk till objektet(frivilligt)</label>
				<input type="text" placeholder="Bildlänk" id="picture" name="bild"class="form-control"/>
				
				
				<input type="submit" value="Publicera annons" id="publ" class="btn btn-primary"/>
					
			
			
			
			</form>
		</div>
	</div>

</body>
</html>