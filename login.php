<!--Login.php, på denna sida skriver man in sina inloggningsiuppfiter, man det ska även finnas en knapp som leder till registreringssidan
Observera att det ska finnas en knapp som är av typen submit vilken genomför inloggningen(loginprocess.php) -->

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="style/style.css">
    <title>Logga in</title>
</head>
<body>
	<div class="container-fluid">

		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			
		</div>
		<div class="login-form">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="row">
					<h1>Logga in</h1>
				<form id="Loginform" action="loginprocess.php" method="POST" onsubmit="" >
					<label for="username">Vänligen skriv användarnamn</label>
					<input type="text" placeholder="Användarnamn" id="username" name="username" class="form-control"/>
					
					<label for="password">Vänligen skriv lösenord</label>
					<input type="password" placeholder="Lösenord" id="password" name="password" class="form-control"/>
					<input type="submit" value="Logga in" id="login" class="btn btn-primary"/>
				</form>
				</div>
				<div class="row">
					<br>
					<label for="reg">Har du inget konto?</label>
				</div>
				<div class="row">
					<a href="registration.html" class="btn btn-primary" id="reg">Registrera</a>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>
	</div>

</body>
</html>