

<?php
//categoryprocess
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
		    			<a class="navbar-brand" href="index.php"><img src="Design/logo2.png" class="img-responsive" alt="Image"></a>
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
  
	<?php
	
	
			$Kategori = $_POST['category'];
			
		
	
			$annonser = GetCategory($Kategori);
			
			
			
			if ($annonser->num_rows > 0) 
				{
					//Nu är det avsändaren som ska visas som den som skrivit kommentaren, gör därför så att användarnamn och ev email syns istället för namn
					while($row = $annonser->fetch_assoc()) 
					{
						$bild = $row["Picture"];
						$id = $row["ID"];
						echo '<form class="navbar-form navbar-left" action="profile.php"  method="POST" role="search"> 		<input type="hidden" name="Advertiser" value="Roy"> /////////////////////////MÅste ta bort STATISKA ROY OCH ERSÄTTA!!!!!!!!!!"""""""""""!!!!!
						'.'<div class="commentbox">' .'<br>'. 'Pryl: ' . $row["Thing"] . '<br>'. 'Bild: ' . '<div class="previewimg">' . '<img src="'.$bild.'">' . '<br>' . 'Beskrivning: ' . $row["Description"] . '<br>' . 'Annonsör: ' . $row["Advertiser"] . '<br>' . 'Kategori: ' . $row["Category"] . '<br>' . '<br>';
						if(isset($_SESSION['betal'])):
						echo '<button type="submit" class="btn btn-default">Intresseanmälan</button>' . '</form>' . '</div>';
						else: echo '</form>' . '</div>';
						endif;
						
						if(isset($_SESSION['admin']))
						{
						echo $id;
							?>
							<form id="deleteform" action="deleteprocess.php" method="POST">
								<input type="hidden" name="ID" value="<?php echo $id ?>"> <!-- vi kan inte ha ett statiskt idm vi måste använda $id -->
								<button type="submit" class="btn btn-default">Ta bort annons</button>
							</form>
							<?php
							//echo '.<a href="deleteprocess.php">.'
						}
						
						/*
						if(isset($_SESSION['betal']))
						{
							echo '.<a href="deleteprocess.php">.'
						}
						*/

						//Vi behöver ett form för varje annons
						
						
						
					}
				}
		
		
		
	
	


//$echo = $_SESSION['betal'];

//echo $echo;

if(isset($_SESSION['betal'])):
?>
<!--
	<form class="navbar-form navbar-left" action="profile.php"  method="POST" role="search">
		<input type="hidden" name="Advertiser" value="Roy">
		
		<!--<input type="text" class="form-control" name="Adv" placeholder="vänligen skriv annonsörens användarnamn och tryck sedan på intreseanmälan">-->
		<!-- <input  name="Advertiser" value="<?php $row["Advertiser"]  ?>"> 
		
		<button type="submit" class="btn btn-default">Intresseanmälan</button>

	</form>
	-->
 <!--	<a href="profile.php" >Gör intreseanmälan</a> -->
<?php
endif;
?>
<div class="panel panel-default">
		  	<div class="panel-footer">
		  		<div class="row">
		  			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		  				Kundscervice
		  			</div>
		  			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		  				Information
		  			</div>
		  			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		  				Vårt Koncept
		  			</div>
		  		</div>
		  	</div>
</div>
</div>

</body>
</html>