<?php 
	//På denna sida genomförs registreringen utifrån de ifyllda formuläruppgifterna från registration.php
	require 'database.php';
	
	//namn
	
	$user = $_POST['username'];
	
	$password = $_POST['password'];
		
	$email = $_POST['email'];

	$phone = $_POST['tele'];
	
	$Användare = GetAllUsers();
	$Userexist = false;
	if ($Användare->num_rows > 0)
	{
		while($row = $Användare->fetch_assoc()) 
		{
			if($user === $row["Username"])
			{
				$Userexist = true;	
			}
			if($email === $row["Email"])
			{
				$Userexist = true;
					
			}
		}
	}
	if($Userexist === false)
	{
		InsertUSER($user, $password, $email, $phone);
		header('Location: login.php');
	
	}
	else
	{
		echo "Användare och eller email används redan";
	}
	
	
	

?>