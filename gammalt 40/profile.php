
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="style/style.css">
    <title>Profil</title>
</head>
<body>
	<div class="container">
		  <section>
		    <div class="page-header">
		    <nav class="navbar navbar-default" role="navigation">
		    	<div class="container-fluid">
		    		<!-- Brand and toggle get grouped for better mobile display -->
		    		<div class="navbar-header">
		    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		    				<span class="sr-only">Toggle navigation</span>
		    				<span class="icon-bar"></span>
		    				<span class="icon-bar"></span>
		    				<span class="icon-bar"></span>
		    			</button>
		    			<a class="navbar-brand" href="index.html"><img src="Design/logo2.png" class="img-responsive" alt="Image"></a>
		    		</div>
		    
		    		<!-- Collect the nav links, forms, and other content for toggling -->
		    		<div class="collapse navbar-collapse navbar-ex1-collapse">
		    			<ul class="nav navbar-nav">
		    				<li><a href="#">About</a></li>
		    				<li><a href="#">Link</a></li>
		    			</ul>
		    			<form class="navbar-form navbar-left" action="searchviewall.php"  method="POST" role="search">
		    				<div class="form-group">
		    					<input type="text" class="form-control" name="search" placeholder="Sök">
		    				</div>
		    				<div class="btn-group">
		    				<button type="submit" class="btn btn-default">Sök</button>
		    				</div>
		    			</form>
						<form class="navbar-form navbar-left" action="adds.php"  method="POST" role="search">
							<button type="submit" class="btn btn-default">Visa alla annonser</button>
						</form>
		    			<ul class="nav navbar-nav navbar-right">
		    				<li><a href="newadd.html">Skapa ny annons</a></li>
		    				<li><a href="login.php">Logga in</a></li>
		    				
		    			</ul>
		    		</div><!-- /.navbar-collapse -->
		    	</div>
		    </nav>
		    </div>
		  </section>
		  <div class="row">
		  			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<h1>Profil</h1>

						<p>Användarnamn: <?php $anvnamn = $_POST['Advertiser'];
						echo $anvnamn; ?></p>
						
						<p>Rank: +20</p>
						
						
						<p>Telefonnummer: 070439876</p>
						
						<p>Email: Royroy.s@gmail.com</p>
		  			</div>
		  			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					</div>
		  			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h2>Profilens annonser</h2>
		  

	


	
	
	
	
	<!--<a href="subscription.php">Betala</a>-->

		<?php
			
	
	
			//&$anvnamn = $_POST['Advertiser'];
		
	
			$profil = GetProfile($anvnamn);
			
			//echo $anvnamn;
			if ($profil->num_rows > 0) 
				{
					//Nu är det avsändaren som ska visas som den som skrivit kommentaren, gör därför så att användarnamn och ev email syns istället för namn
					while($row = $profil->fetch_assoc()) 
					{
						
						//echo $anvnamn . $row['Email'] . $row['Tele'] ;

					}
				}
		
		
			$minaAnnonser = GetProfAdds($anvnamn);
			
			if ($minaAnnonser->num_rows > 0) 
				{
					//Nu är det avsändaren som ska visas som den som skrivit kommentaren, gör därför så att användarnamn och ev email syns istället för namn
					while($row = $minaAnnonser->fetch_assoc()) 
					{
						$bild = $row["Picture"];
						echo '<form class="navbar-form navbar-left" action="profile.php"  method="POST" role="search"> 		<input type="hidden" name="Advertiser" value="Roy"> <button type="submit" class="btn btn-default">Intresseanmälan</button>
						</form>' .'<div class="commentbox-profile">' . 'Pryl: ' . $row["Thing"] . '<br>'. 'Bild: ' . '<div class="previewimg">' . '<img src="'.$bild.'">' . '</div>' . '<br>' . 'Beskrivning: ' . $row["Description"] . '<br>' . 'Annonsör: ' . $row["Advertiser"] . '<br>' . 'Kategori: ' . $row["Category"] . '<br>' . '<br>'.'</div>';

						//Vi behöver ett form för varje annons
						
						
						
					}
				}
	
	
	?>

					</div>
			</div>

			<h3>Skriv intresseanmälan</h3>
			<form id="Intresse" action="interestprocess.php"  method="POST">
				<label for="anmälan">Vad vill du låna?</label>
				<input type="text" id="anmälan" name="obj" placeholder="Vad är det du vill låna?">
				
				
				<label for="vrf">Varför vill du låna det?</label>
				<input type="text" id="vrf" name="text" placeholder="Varför vill du låna objektet?">
				
				<!--Vi måste veta i vilken profil intresseanmälan ska sparas, under vilket användarnamn -->
				
				<input type="hidden" name="Utlånare" value="<?php echo $anvnamn ?>">

						
				<input type="hidden" name="lånare" value="<?php echo $_SESSION['username'] ?>">
				
				<button type="submit" class="btn btn-default">Intresseanmälan</button>
				
				
			</form>
			
			
			
</body>
</html>