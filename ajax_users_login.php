<?php session_start();
require_once 'config.php';

	if(isset($_POST['login_username']) && $_POST['login_username']!="")
	
	{
	
		if(isset($_POST['login_password']) && $_POST['login_password']!="")
	
			{
	
	
				$username 	= mysqli_real_escape_string($link, $_POST['login_username']);
	
				$password 	= mysqli_real_escape_string($link, $_POST['login_password']);	
	
	
				$q = "select * from `users` where email = '$username' ";
	
				$result = mysqli_query($link, $q);
	
				
					if(mysqli_num_rows($result) > 0)
	
					{	

						$row = mysqli_fetch_array($result);
	
						if ($row["password"] == $password)
	
						{		
	
							$_SESSION["user_id"] 	= $row['id'];
	
							$_SESSION["user_firstname"] 	=  $row['first_name'];
						
							if(isset($_SESSION['user_id']) && isset($_SESSION['user_firstname']))
	
							{
								
								echo "success";
	
								exit;
	
							}
	
							else
	
							{
	
								echo  "fail login"; 
	
								exit;
	
							}
	
						}
	
						else
	
						{
	
							echo "pass not match";
	
							exit;
	
						}
	
					
	
					}
	
					else
	
					{
	
						echo "not found";
	
						exit;
	
					}
	
				
	
				
			}
	
			else
	
			{
	
				echo "password";
	
				exit;
	
			}
	
	}
	
	else
	
	{
	
		echo "username";
	
		exit;
	
	}


?>