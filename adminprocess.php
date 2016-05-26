

<?php
	//Adminlogin

	
	require 'database.php';

	
	$anv = $_POST['adminusername'];

	$användare =   GetUserLogin('Admin', 'AdminU', $anv);

	if ($användare->num_rows > 0)
	{
		$anvhm = $användare->fetch_assoc();
		$orgPassword = $anvhm['PassW'];
		$checkPassword = $_POST['adminpassword'];
		
		
		if($orgPassword === $checkPassword)
		{
			//<script>Session ska startas</script>
			session_start();
				$_SESSION['admin'] = $anvhm['AdminU'];
			//echo $_SESSION['username'];
			header('Location: index.php');
		}
		else
		{
			header('Location: admin.php');
		}
	}
	else
	{
		header('Location: admin.php');
	}
	
	
	
	
	
	
	/*
	
	
	
	
	require 'database.php';
	
	//$admin = GetAdmin();
	$writenuser = $_POST['adminusername'];
	$writenpass = $_POST['adminpassword'];
	
	$admin = GetUserLogin('Admin', 'AdminU', $writenuser);
	
	
	
if ($admin->num_rows > 0)
	{	
		$adminarray = $admin->fetch_assoc();
		
		$admnpass = adminarray['PassW'];
		
		$admnuser = adminarray['AdminU'];
		
		if($admnpass === $writenpass && writenuser === $admnuser)
			{
				session_start();
				//<script>Session ska startas</script>
				$_SESSION['admin'] = $adminarray['AdminU'];
				?>
				<script>alert("Adminlogin succesfull");</script>
				<?php
				header('Location: index.php');
			}
		else
			{
				?><script>alert("Login failed")</script><?php
				//header('Location: admin.php');
			}
		
	}
	
	*/
?>