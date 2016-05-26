<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Adminlogin</title>
</head>
<body>
	<form id="Adminform" action="adminprocess.php" method="POST">
					<label for="adusername">Vänligen skriv användarnamn</label>
					<input type="text" placeholder="Användarnamn" id="adusername" name="adminusername" class="form-control"/>
					
					<label for="adpassword">Vänligen skriv lösenord</label>
					<input type="password" placeholder="Lösenord" id="adpassword" name="adminpassword" class="form-control"/>
					<input type="submit" value="Logga in" id="login" class="btn btn-primary"/>
				</form>
</body>
</html>







