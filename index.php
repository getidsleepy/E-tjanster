

<?php 


	session_start();
	if(!isset($_SESSION['username']) || $_SESSION['username'] === "")
	{
		?><script>alert("ingen session igång"); </script><?php
	}
	
	if(isset($_SESSION['admin']))
	{
		?><script>alert("Admin-mode"); </script><?php
	}
?>





 <!DOCTYPE html>
<html lang="en">
	<head>
 		<title>Utlånaren</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="style/style.css">
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
		    			<a class="navbar-brand" href="#"><img src="Design/logo2.png" class="img-responsive" alt="Image"></a>
		    		</div>
		    
		    		<!-- Collect the nav links, forms, and other content for toggling -->
		    		<div class="collapse navbar-collapse navbar-ex1-collapse">
		    			<ul class="nav navbar-nav">
		    				<li><a href="#">About</a></li>
		    				<li><a href="myprofile.php">Min profil</a></li>
							<li><a href="logout.php">Log out</a></li>
							<li><a href="admin.php">Admin</a></li>


		    			</ul>
		    			<form class="navbar-form navbar-left" action="searchviewall.php"  method="POST" role="search">
		    				<div class="form-group">
		    					<input type="text" class="form-control" name="search" placeholder="Sök">
		    				</div>
		    				<div class="btn-group">
		    				<button type="submit" class="btn btn-default">Sök/Visa alla annonser(om sökruta ej ifylld)</button>
		    				</div>
		    			</form>
						<!--
						<form class="navbar-form navbar-left" action="adds.php"  method="POST" role="search">
							<button type="submit" class="btn btn-default">Visa alla annonser</button>
						</form>
						-->
		    			<ul class="nav navbar-nav navbar-right">
		    				<li><a href="newadd.php">Skapa ny annons</a></li>
		    				<li><a href="login.php">Logga in</a></li>
		    				
		    			</ul>
		    		</div><!-- /.navbar-collapse -->
		    	</div>
		    </nav>
		    </div>
		  </section>
		  <p>Kategorier: </p>
		  
		  <form name="" action="categoryadds.php" method="POST">
		   
		   <input type="radio" name="category" value="Verktyg & Maskiner">Verktyg & Maskiner<br>
		   <input type="radio" name="category" value="Fordon">Fordon<br>
		   <input type="radio" name="category" value="För hemmet">För hemmet<br>
		   <input type="radio" name="category" value="Personligt">Personligt<br>
		   <input type="radio" name="category" value="Elektronik">Elektronik<br>
		   <input type="radio" name="category" value="Bostad">Bostad<br>
		   <input type="radio" name="category" value="Fritid & Hobby">Fritid & Hobby<br>
		   <input type="radio" name="category" value="Övrigt">Övrigt<br>
		   
		   <button type="submit" class="btn btn-default">Visa vald kategori</button>
<!--
		  <a href="">Verktyg & Maskiner</a>
		  <a href="">Fordon</a>
		  <a href="">För hemmet</a>
		  <a href="">Personligt</a>
		  <a href="">Elektronik</a>
		  <a href="">Bostad</a>
		  <a href="">Fritid & Hobby</a>
		  <a href="">Övrigt</a>
		  -->
		 

		  </form>
		  
		  
		  
		  
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